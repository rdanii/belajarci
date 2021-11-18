<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('barang_model');
    // if (!$this->session->barangdata('auth')) {
    //     $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman barang');
    //     redirect('auth');
    // }
  }

  public function index()
  {
    $data['barang'] = $this->barang_model->getBarang();
    $this->load->view('barang_view', $data);
  }

  function addBarang()
  {
    $this->load->view('add_barang');
  }

  function ubahBarang($id){
    $data['barang'] = $this->barang_model->getBarangId($id);
    $this->load->view('update_barang', $data);
  }

  function create()
  {
    $nama = $this->input->post('nama_barang');
    $harga = $this->input->post('harga');
    $kategori = $this->input->post('kategori');
    $jumlah = $this->input->post('jumlah_barang');
    $merk = $this->input->post('merk');
    $this->barang_model->addBarang($nama, $harga, $kategori, $jumlah, $merk);
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
      'nama' => $nama,
      'harga' => $harga,
      'kategori' => $kategori,
      'jumlah'  => $jumlah,
      'merk'  => $merk
    );

    $where = array(
      'id' => $id
    );

    $this->barang_model->update_data($where, $data);
    redirect('barang');
  }
}
