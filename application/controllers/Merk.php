<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Merk extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('merk_model');
    // if (!$this->session->merkdata('auth')) {
    //     $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman merk');
    //     redirect('auth');
    // }
  }

  public function index()
  {
    $data['merk'] = $this->merk_model->getMerk();
    $this->load->view('merk_view', $data);
  }

  function addMerk()
  {
    $this->load->view('add_merk');
  }

  function create()
  {
    $merk = $this->input->post('merk');
    $this->merk_model->addMerk($merk);
    redirect('merk');
  }
}
