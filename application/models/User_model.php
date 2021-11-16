<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    function getUser(){
        $result = $this->db->get('tbl_user');
        return $result;
    }
    
    function addUser($user, $nama, $email, $password){
        $data = array(
            'username' => $user,
            'nama' => $nama,
            'email' => $email,
            'password' => sha1($password)
        );
        $this->db->insert('tbl_user', $data);
    }

}


/* End of file filename.php */
