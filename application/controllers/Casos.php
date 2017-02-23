<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('casos/casos_index');
        $data = array();
        $this->load->view('casos/casos_index', $data);
    }

    public function caso($caso = '')
    {
        switch ($caso) {
            case 'icognitis':
                $this->icognitis();
                break;
            case 'sucesion':
                $this->sucesion();
                break;
            case 'oficinas-virtuales-amuebladas':
                $this->oficinas_virtuales_amuebladas();
                break;
            case 'recuperacion-de-cartera':
                $this->recuperacion_de_cartera();
                break;
            case 'constitucion-de-sociedad-e-inversion-extranjera':
                $this->constitucion_de_sociedad_e_inversion_extranjera();
                break;
            case 'darch':
                $this->darch();
                break;
            default:
                redirect('casos');
        }
    }

    public function icognitis()
    {
        $this->cargar_idioma->carga_lang('casos/caso_icognitis');
        $data = array();
        $this->load->view('casos/caso_icognitis', $data);
    }

    public function sucesion()
    {
        $this->cargar_idioma->carga_lang('casos/caso_sucesion');
        $data = array();
        $this->load->view('casos/caso_sucesion', $data);
    }

    public function oficinas_virtuales_amuebladas()
    {
        $this->cargar_idioma->carga_lang('casos/caso_oficinas_virtuales_amuebladas');
        $data = array();
        $this->load->view('casos/caso_oficinas_virtuales_amuebladas', $data);
    }

    public function recuperacion_de_cartera()
    {
        $this->cargar_idioma->carga_lang('casos/caso_recuperacion_de_cartera');
        $data = array();
        $this->load->view('casos/caso_recuperacion_de_cartera', $data);
    }

    public function constitucion_de_sociedad_e_inversion_extranjera()
    {
        $this->cargar_idioma->carga_lang('casos/caso_constitucion_de_sociedad_e_inversion_extranjera');
        $data = array();
        $this->load->view('casos/caso_constitucion_de_sociedad_e_inversion_extranjera', $data);
    }

    public function darch()
    {
        $this->cargar_idioma->carga_lang('casos/caso_darch');
        $data = array();
        $this->load->view('casos/caso_darch', $data);
    }

}