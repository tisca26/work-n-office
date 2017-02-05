<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa_del_sitio extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('inicio/mapa_del_sitio');
        $data = array();
        $this->load->view('inicio/mapa_del_sitio', $data);
    }
}