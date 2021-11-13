<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Stok extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('stok_model');
    }

    public function index()
    {
        $data['tampil_stok'] = $this->stok_model->tampilkan_stok();
        $this->load->view('stok_view', $data);
    }
}

/* End of file Barang.php */
