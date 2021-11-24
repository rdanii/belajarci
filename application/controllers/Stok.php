<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Stok extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model');
        // if (!$this->session->stokdata('auth')) {
        //     $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman stok');
        //     redirect('auth');
        // }
    }

    public function index()
    {
        $table = 'tbl_stok';
        $data['judul'] = 'Halaman Stok';
        $data['stok'] = $this->general_model->getData($table);
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
        $data['stok'] = $this->general_model->getDataById($table, $where);
        $this->load->view('update_stok', $data);
    }

    function create()
    {
        $nama = $this->input->post('nama_barang');
        $jumlah = $this->input->post('jumlah_barang');
        $merk = $this->input->post('merk');
        $jenis = $this->input->post('jenis');
        $data = [
            'nama_barang' => $nama,
            'jumlah_barang' => $jumlah,
            'merk' => $merk,
            'jenis' => $jenis
        ];
        $table = 'tbl_stok';
        $this->general_model->insertData($table, $data);
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
        $table = 'tbl_stok';
        $this->general_model->update_data($table, $where, $data);
        redirect('stok');
    }

    function delete()
    {
        $id_table = 'id';
        $id_stok = $this->uri->segment(3);
        $table = 'tbl_stok';
        $this->general_model->delete($id_table, $id_stok, $table);
        redirect('stok');
    }
}
