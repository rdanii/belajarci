<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
    }

    public function index()
    {
        $data['kategori'] = $this->kategori_model->getKategori();
        $this->load->view('kategori_view', $data);
    }

    function addKategori()
    {
        $this->load->view('add_kategori');
    }

    function create()
    {
        $kategori = $this->input->post('kategori');
        $this->kategori_model->addKategori($kategori);
        redirect('kategori');
    }
}

/* End of file Kategori.php */
