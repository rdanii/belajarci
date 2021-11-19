<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model');
        // if (!$this->session->userdata('auth')) {
        //     $this->session->set_flashdata('messageAkses', 'Anda tidak berhak mengakses halaman User');
        //     redirect('auth');
        // }
    }

    public function index()
    {
        $table = 'tbl_user';
        $data['judul'] = 'Halaman User';
        $data['user'] = $this->general_model->getData($table);
        $data['content'] = 'user_view';
        $this->load->view('set_view', $data);
    }

    function addUser()
    {
        $this->load->view('add_user');
    }

    function ubahUser()
    {
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $table = 'tbl_user';
        $data['user'] = $this->general_model->getDataById($table, $where);
        $this->load->view('update_user', $data);
    }

    function create()
    {
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $email = $this->input->post('email');
        $data = [
            'username' => $username,
            'nama' => $nama,
            'password' => $password,
            'email' => $email
        ];
        $table = 'tbl_user';
        $this->general_model->insertData($table, $data);
        redirect('user');
    }

    function update()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $email = $this->input->post('email');

        $data = [
            'username' => $username,
            'nama' => $nama,
            'password' => $password,
            'email' => $email
        ];

        $where = array(
            'id' => $id
        );
        $table = 'tbl_user';
        $this->general_model->update_data($table, $where, $data);
        redirect('user');
    }
}
