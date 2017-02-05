<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_rapido extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('inicio/inicio_index');
        $this->form_validation->set_rules('nombre', trans_line('inicio_form_nombre'), 'required|trim|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('correo', trans_line('inicio_form_correo'), 'required|trim|valid_email|max_length[40]');
        $this->form_validation->set_rules('telefono', trans_line('inicio_form_telefono'), 'required|trim|min_length[7]|numeric|max_length[20]');
        if ($this->form_validation->run() == FALSE) {
            $this->_cargar_inicio();
        } else {
            $receptor_mail = $this->input->post('correo');
            $receptor_nombre = $this->input->post('nombre');
            $receptor_telefono = $this->input->post('telefono');
            $estado = $this->_enviar_correo_a_ventas($receptor_nombre, $receptor_mail, $receptor_telefono);
            $estado2 = $this->_enviar_correo_a_prospecto($receptor_nombre, $receptor_mail, $receptor_telefono);
            if($estado) {
                set_attr_session('contacto_exitoso',true);
                if($estado2) {
                    redirect(base_url_lang());
                } else{
                    set_bootstrap_alert(trans_line('inicio_error_prospecto'),BOOTSTRAP_ALERT_WARNING);
                    redirect(base_url_lang());
                }
            } else{
                set_attr_session('contacto_exitoso',false);
                set_bootstrap_alert(trans_line('inicio_error'), BOOTSTRAP_ALERT_DANGER);
                $this->_cargar_inicio();
            }
        }
    }

    private function _cargar_inicio(){
        log_message('debug','--------------'.get_attr_session('promo').'----------------');
        $data = array();
        $data['promo_show'] = (get_attr_session('promo_displayed')==false)?true:false;
        $data['exitoso'] = (get_attr_session('contacto_exitoso')==true)?true:false;
        set_attr_session('promo_displayed',true);
        $this->load->view('inicio/inicio_index', $data);
        set_attr_session('contacto_exitoso',false);
    }

    private function _enviar_correo_a_ventas($receptor_nombre = '', $receptor_mail = '', $receptor_telefono = '')
    {
        $mail = new PHPMailer();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = 'mail.oficinas-virtuales-amuebladas.com';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'contacto@oficinas-virtuales-amuebladas.com';                 // SMTP username
        $mail->Password = 'Cont4ct0_123!';
        $mail->Port = 465;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);
        $mail->setFrom('contacto@oficinas-virtuales-amuebladas.com', 'Página Web OVA');
        $mail->Subject = "Contacto Rápido - OVA";
        $mail->addAddress('contacto@oficinas-virtuales-amuebladas.com', 'Contacto OVA');

        $data['receptor_nombre'] = $receptor_nombre;
        $data['receptor_mail'] = $receptor_mail;
        $data['receptor_telefono'] = $receptor_telefono;
        $cuerpo_mensaje = $this->load->view('inicio/inicio_email_ventas', $data, TRUE);

        $mail->msgHTML($cuerpo_mensaje);
        if ($mail->send()) {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            return TRUE;
        } else {
            log_message('ERROR', '--------- Error envio correo ventas ---------' . $mail->ErrorInfo);
            return FALSE;
        }
    }

    private function _enviar_correo_a_prospecto($receptor_nombre = '', $receptor_mail = '',  $receptor_telefono = '')
    {
        $mail = new PHPMailer();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = 'mail.oficinas-virtuales-amuebladas.com';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'contacto@oficinas-virtuales-amuebladas.com';                 // SMTP username
        $mail->Password = 'Cont4ct0_123!';
        $mail->Port = 465;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);
        $mail->setFrom('contacto@oficinas-virtuales-amuebladas.com', 'Oficinas Virtuales Amuebladas OVA');
        $mail->addReplyTo('contacto@oficinas-virtuales-amuebladas.com', 'Oficinas Virtuales Amuebladas OVA');
        $mail->Subject = trans_line('inicio_confirmacion');
        $mail->addAddress($receptor_mail, $receptor_nombre);

        $data['receptor_nombre'] = $receptor_nombre;
        $data['receptor_mail'] = $receptor_mail;
        $data['receptor_telefono'] = $receptor_telefono;
        $cuerpo_mensaje = $this->load->view('inicio/inicio_email_prospecto', $data, TRUE);

        $mail->msgHTML($cuerpo_mensaje);
        if ($mail->send()) {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            return TRUE;
        } else {
            log_message('ERROR', '--------- Error envio correo prospecto ---------' . $mail->ErrorInfo);
            return FALSE;
        }
    }

}