<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
  function getBarang()
  {
    $result = $this->db->get('tbl_barang');
    return $result;
  }
  function getBarangId($id)
  {
    $result = $this->db->get_where('tbl_barang',array('id' => $id));
    return $result;
  }


  function addBarang($nama, $harga, $kategori, $jumlah, $merk)
  {
    $data = array(
      'nama_barang' => $nama,
      'harga' => $harga,
      'kategori' => $kategori,
      'jumlah_barang' => $jumlah,
      'merk' => $merk
    );
    $this->db->insert('tbl_barang', $data);
  }


  function update_data($where, $data)
  {
    $this->db->where($where);
    $this->db->update('tbl_barang', $data);
  }
}


/* End of file filename.php */
