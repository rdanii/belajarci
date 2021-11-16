<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Stok_model extends CI_Model
{
    function tampilkan_stok()
    {
        $stok = $this->db->get('tbl_stok');
        return $stok;
    }
}

/* End of file Stok_model.php */
