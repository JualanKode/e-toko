<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('login_berhasil') !== TRUE) {
            redirect(base_url());
        }

    }

    public function index()
    {
        $this->load->view('header.php');
        $this->load->view('sidebar.php');
        $this->load->view('dashboard.php');
        $this->load->view('footer.php');
    }
}
