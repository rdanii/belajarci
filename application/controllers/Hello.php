<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{

    public function index()
    {
        echo 'Test';
        echo '<br>';
        $this->nama();
    }

    public function nama()
    {
        echo 'cetak nama';
    }
}

/* End of file Hello.php */
