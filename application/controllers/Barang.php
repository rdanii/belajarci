<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('general_model');
    // if (!$this->session->barangdata('auth')) {
    //     $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman barang');
    //     redirect('auth');
    // }
  }

  public function index()
  {
    $table = 'tbl_barang';
    $data['judul'] = 'Halaman Barang';
    $data['barang'] = $this->general_model->getData($table);
    $data['content'] = 'barang_view';
    $this->load->view('set_view', $data);
  }

  function addBarang()
  {
    $this->load->view('add_barang');
  }

  function ubahBarang()
  {
    $id = $this->uri->segment(3);
    $where = array('id' => $id);
    $table = 'tbl_barang';
    $data['barang'] = $this->general_model->getDataById($table, $where);
    $this->load->view('update_barang', $data);
  }

  function create()
  {
    $nama = $this->input->post('nama_barang');
    $harga = $this->input->post('harga');
    $kategori = $this->input->post('kategori');
    $jumlah = $this->input->post('jumlah_barang');
    $merk = $this->input->post('merk');
    $data = array(
      'nama_barang' => $nama,
      'harga' => $harga,
      'kategori' => $kategori,
      'jumlah_barang' => $jumlah,
      'merk' => $merk
    );
    $table = 'tbl_barang';
    $this->general_model->insertData($table, $data);
    redirect('barang');
  }

  function update()
  {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama_barang');
    $harga = $this->input->post('harga');
    $kategori = $this->input->post('kategori');
    $jumlah = $this->input->post('jumlah_barang');
    $merk = $this->input->post('merk');

    $data = array(
      'nama_barang' => $nama,
      'harga' => $harga,
      'kategori' => $kategori,
      'jumlah_barang'  => $jumlah,
      'merk'  => $merk
    );

    $where = array(
      'id' => $id
    );

    $table = 'tbl_barang';
    $this->general_model->update_data($table, $where, $data);
    redirect('barang');
  }
}
