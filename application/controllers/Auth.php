<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('general_model');
  }

  public function index()
  {
    if ($this->session->userdata('auth')) {
      redirect('user');
    } else {
      $this->load->view('header');
      $this->load->view('login');
      $this->load->view('footer');
    }
  }

  function login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $table = 'tbl_user';
    $where = 'email';
    $where_data = $email;
    $user = $this->general_model->getDataByIdSingleData($table, $where, $where_data);

    if (empty($user)) {
      $this->session->set_flashdata('message', 'User tidak ditemukan');
      redirect('auth');
    } else {
      if (password_hash($password, PASSWORD_DEFAULT) == $user->password) {
        $session = array(
          'auth' => true,
          'nama' => $user->nama,
          'email' => $user->email
        );
        $this->session->set_userdata($session);
        redirect('user');
      } else {
        $this->session->set_flashdata('message', 'Password tidak cocok');
        redirect('auth');
      }
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }
}

/* End of file Controllername.php */
