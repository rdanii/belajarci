<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Merk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('merk_model');
    }

    public function index()
    {
        $data['tampil_merk'] = $this->merk_model->tampilkan_merk();
        $this->load->view('merk_view', $data);
    }
}

/* End of file Merk.php */
