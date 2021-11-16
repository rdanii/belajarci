<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
  function getKategori()
  {
    $result = $this->db->get('tbl_kategori');
    return $result;
  }

  function addKategori($kategori)
  {
    $data = [
      'kategori' => $kategori
    ];
    $this->db->insert('tbl_kategori', $data);
  }
}

/* End of file Kategori_model.php */
