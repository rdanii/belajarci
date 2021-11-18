<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Stok_model extends CI_Model
{
    function getStokId()
    {
        $result = $this->db->get('tbl_stok');
        return $result;
    }

    function addStok($nama, $jumlah, $merk, $jenis)
    {
        $data = array(
            'nama_barang' => $nama,
            'jumlah_barang' => $jumlah,
            'merk' => $merk,
            'jenis' => $jenis
        );
        $this->db->insert('tbl_stok', $data);
    }

    function update_data($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tbl_stok', $data);
    }
}


/* End of file filename.php */
