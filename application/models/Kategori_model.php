<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    function tampilkan_kategori()
    {
        $kategori = $this->db->get('tbl_kategori');
        return $kategori;
    }
}

/* End of file Kategori_model.php */
