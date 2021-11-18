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
        $data['tampil_stok'] = $this->stok_model->getStokId();
        $data['content'] = 'stok_view';
        $this->load->view('set_view', $data);
    }

    function addStok()
    {
        $this->load->view('add_stok');
    }

    function ubahStok()
    {
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $table = 'tbl_stok';
        $data['stok'] = $this->stok_model->getStokId($table, $where);
        $this->load->view('update_stok', $data);
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

    function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama_barang');
        $jumlah = $this->input->post('jumlah_barang');
        $merk = $this->input->post('merk');
        $jenis = $this->input->post('jenis');

        $data = array(
            'nama_barang' => $nama,
            'jumlah_barang'  => $jumlah,
            'merk'  => $merk,
            'jenis' => $jenis
        );

        $where = array(
            'id' => $id
        );

        $this->stok_model->update_data($where, $data);
        redirect('stok');
    }
}
