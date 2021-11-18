<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model {
  function insertData($table, $data)
  {
    $this->db->insert($table, $data);
  }

  function update_data($table, $where, $data)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function getData($table)
  {
    $result = $this->db->get($table);
    return $result;
  }

  function getDataById($table, $where)
  {
    $result = $this->db->get_where($table, $where);
    return $result;
  }
}