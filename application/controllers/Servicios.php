<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('servicios/servicios_index');
        $data = array();
        $this->load->view('servicios/servicios_index', $data);
    }

    public function contabilidad_corporativa(){
        $this->cargar_idioma->carga_lang('servicios/servicios_contabilidad');
        $data = array();
        $this->load->view('servicios/servicios_contabilidad', $data);
    }

    public function asesoria_juridica(){
        $this->cargar_idioma->carga_lang('servicios/servicios_juridica');
        $data = array();
        $this->load->view('servicios/servicios_juridica', $data);
    }

    public function recorridos_virtuales(){
        $this->cargar_idioma->carga_lang('servicios/servicios_recorridos');
        $data = array();
        $this->load->view('servicios/servicios_recorridos', $data);
    }

    public function desarrollo_de_software($param = ''){
        switch($param){
            case 'extra-1':
                $this->cargar_idioma->carga_lang('servicios/servicios_desarrollo_extra1');
                $data = array();
                $this->load->view('servicios/servicios_desarrollo_extra1', $data);
                break;
            case 'extra-2':
                $this->cargar_idioma->carga_lang('servicios/servicios_desarrollo_extra2');
                $data = array();
                $this->load->view('servicios/servicios_desarrollo_extra2', $data);
                break;
            default:
                $this->cargar_idioma->carga_lang('servicios/servicios_desarrollo');
                $data = array();
                $this->load->view('servicios/servicios_desarrollo', $data);
                break;
        }
    }

    public function reclutamiento_de_TI(){
        $this->cargar_idioma->carga_lang('servicios/servicios_reclutamiento');
        $data = array();
        $this->load->view('servicios/servicios_reclutamiento', $data);
    }

    public function arquitectura_empresarial(){
        $this->cargar_idioma->carga_lang('servicios/servicios_arquitectura');
        $data = array();
        $this->load->view('servicios/servicios_arquitectura', $data);
    }
}