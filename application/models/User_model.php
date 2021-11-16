<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    function getUser(){
        $result = $this->db->get('tbl_user');
        return $result;
    }
    
    function addUser($username, $nama, $email, $password){
        $data = array(
            'username' => $username,
            'nama' => $nama,
            'email' => $email,
            'password' => $password
        );
        $this->db->insert('tbl_user', $data);
    }

}


/* End of file filename.php */
