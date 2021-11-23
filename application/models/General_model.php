<?php

defined('BASEPATH') or exit('No direct script access allowed');

class General_model extends CI_Model
{
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

  function delete($table_id, $where_id, $table)
  {
    $this->db->where($table_id, $where_id);
    $this->db->delete($table);
  }
}
