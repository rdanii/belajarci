<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        // if (!$this->session->userdata('auth')) {
        //     $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman User');
        //     redirect('auth');
        // }
    }

    public function index()
    {
        $data['user'] = $this->user_model->getUser();
        $data['content'] = 'user_view';
        $this->load->view('set_view', $data);
    }

    function addUser()
    {
        $this->load->view('add_user');
    }

    function create()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        

        $this->user_model->addUser($username, $nama, $email, $password);

        redirect('user');
    }
  }