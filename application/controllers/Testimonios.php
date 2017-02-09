<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonios extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('testimonios/testimonios_index');
        $data = array();
        $this->load->view('testimonios/testimonios_index', $data);
    }
}