<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Merk extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('general_model');
    // if (!$this->session->merkdata('auth')) {
    //     $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman merk');
    //     redirect('auth');
    // }
  }

  public function index()
  {
    $table = 'tbl_merk';
    $data['judul'] = 'Halaman Merk';
    $data['merk'] = $this->general_model->getData($table);
    $data['content'] = 'merk_view';
    $this->load->view('set_view', $data);
  }

  function addMerk()
  {
    $this->load->view('add_merk');
  }

  function ubahMerk()
  {
    $id = $this->uri->segment(3);
    $where = array('id' => $id);
    $table = 'tbl_merk';
    $data['merk'] = $this->general_model->getDataById($table, $where);
    $this->load->view('update_merk', $data);
  }

  function create()
  {
    $merk = $this->input->post('merk');
    $data = [
      'merk' => $merk
    ];
    $table = 'tbl_merk';
    $this->general_model->insertData($table, $data);
    redirect('merk');
  }

  function update()
  {
    $id = $this->input->post('id');
    $merk = $this->input->post('merk');

    $data = array(
      'merk' => $merk
    );

    $where = array(
      'id' => $id
    );
    $table = 'tbl_merk';
    $this->general_model->update_data($table, $where, $data);
    redirect('merk');
  }
}
