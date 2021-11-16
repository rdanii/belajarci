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
        $data['content']= 'stok_view';
        $this->load->view('set_view', $data);
    }
}

/* End of file Stok.php */
