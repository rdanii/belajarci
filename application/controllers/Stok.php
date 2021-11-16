<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Stok extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('stok_model');
        // if (!$this->session->stokdata('auth')) {
        //     $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman stok');
        //     redirect('auth');
        // }
    }

    public function index()
    {
        $data['stok'] = $this->stok_model->getStok();
        $this->load->view('stok_view', $data);
    }

    function addStok()
    {
        $this->load->view('add_stok');
    }

    function create()
    {
        $nama = $this->input->post('nama_barang');
        $jumlah = $this->input->post('jumlah_barang');
        $merk = $this->input->post('merk');
        $jenis = $this->input->post('jenis');
        $this->stok_model->addstok($nama, $jumlah, $merk, $jenis);
        redirect('stok');
    }
}
