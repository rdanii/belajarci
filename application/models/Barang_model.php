<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    function tampilkan_barang()
    {
        $barang = $this->db->get('tbl_barang');
        return $barang;
    }
}

/* End of file Barang_model.php */
