<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
  function getBarang()
  {
    $result = $this->db->get('tbl_barang');
    return $result;
  }
  function getBarangId($table, $where)
  {
    $result = $this->db->get_where($table,$where);
    return $result;
  }


  function addBarang($data)
  {
    $this->db->insert('tbl_barang', $data);
  }

  function insertData($table, $data)
  {
    $this->db->insert($table, $data);
  }


  function update_data($where, $data)
  {
    $this->db->where($where);
    $this->db->update('tbl_barang', $data);
  }
}


/* End of file filename.php */
