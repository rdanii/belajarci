<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Merk_model extends CI_Model
{
    function tampilkan_merk()
    {
        $merk = $this->db->get('tbl_merk');
        return $merk;
    }
}

/* End of file Merk_model.php */
