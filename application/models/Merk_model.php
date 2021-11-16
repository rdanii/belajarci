<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Merk_model extends CI_Model
{
  function getMerk()
  {
    $result = $this->db->get('tbl_Merk');
    return $result;
  }

  function addMerk($merk)
  {
    $data = array(
      'merk' => $merk
    );
    $this->db->insert('tbl_Merk', $data);
  }
}


/* End of file filename.php */
