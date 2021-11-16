<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
    }

    public function index()
    {
        $data['tampil_kategori'] = $this->kategori_model->tampilkan_kategori();
        $this->load->view('kategori_view', $data);
    }
}

/* End of file Kategori.php */
