<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
	{
        //$this->session->set_userdata('idioma_del_sitio', $this->encrypt->encode('english'));
        $this->cargar_idioma->carga_lang('welcome/inicio');
        //$data['line'] = $this->lang->line('inicio_msg');
        $data['line'] = my_trans('inicio_msg');
		$this->load->view('welcome_message', $data);
	}
	
	public function otro()
	{
        //$this->session->set_userdata('idioma_del_sitio', $this->encrypt->encode('english'));
        $this->cargar_idioma->carga_lang('welcome/inicio');
        //$data['line'] = $this->lang->line('inicio_msg');
        $data['line'] = my_trans('inicio_msg');
		$this->load->view('welcome_message', $data);
	}
}
