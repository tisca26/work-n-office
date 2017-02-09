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
}