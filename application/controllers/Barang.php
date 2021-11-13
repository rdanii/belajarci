<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
    }

    public function index()
    {
        $data['tampil_barang'] = $this->barang_model->tampilkan_barang();
        $data['judul'] = 'Coba judul barang';
        $data['isi'] = 'Coba isi barang';
        $this->load->view('barang_view', $data);
    }
}

/* End of file Barang.php */
