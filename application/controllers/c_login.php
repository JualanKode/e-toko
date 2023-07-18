<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('_login.php');
    }

    public function periksa_login()
    {
        if ($this->input->post()) {

            $in = $this->input->post();
            $rs = $this->db->where('user_name', $in['username'])->get('tb_user')->result_array();

            for ($i = 0; $i < count($rs); $i++) {

                //Jika username dan password benar maka masuk ke halaman Dashboard
                if ($in['username'] == $rs[$i]['user_name'] && 
                    md5($in['password']) == $rs[$i]['user_password']) {

                    $sesdata = array(
                        'user_id'        => $rs[$i]['user_id'],
                        'user_name'      => $rs[$i]['user_name'],
                        'user_full_name' => $rs[$i]['user_full_name'],
                        'login_berhasil' => TRUE
                    );

                    $this->session->set_userdata($sesdata);

                    return redirect('home');
                }

                //Jika username dan password salah maka kembali ke halaman Login
                return redirect(base_url());
            }

            return redirect(base_url());
        }
    }

    public function logout()
    {
        //hapus semua data login (session)
        $this->session->sess_destroy();

        //kembali ke halaman login
        redirect(base_url());
    }
    
}
