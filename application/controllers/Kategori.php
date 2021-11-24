<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('general_model');
    }

    public function index()
    {
        $table = 'tbl_kategori';
        $data['judul'] = 'Halaman Kategori';
        $data['kategori'] = $this->general_model->getData($table);
        $data['content'] = 'kategori_view';
        $this->load->view('set_view', $data);
    }

    function addKategori()
    {
        $this->load->view('add_kategori');
    }

    function ubahKategori()
    {
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $table = 'tbl_kategori';
        $data['kategori'] = $this->general_model->getDataById($table, $where);
        $this->load->view('update_kategori', $data);
    }

    function create()
    {
        $kategori = $this->input->post('kategori');
        $data = [
            'kategori' => $kategori
        ];
        $table = 'tbl_kategori';
        $this->general_model->insertData($table, $data);
        redirect('kategori');
    }

    function update()
    {
        $id = $this->input->post('id');
        $kategori = $this->input->post('kategori');

        $data = array(
            'kategori' => $kategori
        );

        $where = array(
            'id' => $id
        );
        $table = 'tbl_kategori';
        $this->general_model->update_data($table, $where, $data);
        redirect('kategori');
    }

    function delete()
    {
        $id_table = 'id';
        $id_kategori = $this->uri->segment(3);
        $table = 'tbl_kategori';
        $this->general_model->delete($id_table, $id_kategori, $table);
        redirect('kategori');
    }
}

/* End of file Kategori.php */
