<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_kustomer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('login_berhasil') !== TRUE) {
            redirect(base_url());
        }

        $this->load->model('m_kustomer');
    }
    
    //_________________________________________________________________________________________________________________________

    public function index()
    {
        $this->load->view('header.php');
        $this->load->view('sidebar.php');
        $this->load->view('kustomer.php');
        $this->load->view('footer.php');
    }

    //_________________________________________________________________________________________________________________________

    public function TampilkanDataKustomer()
    {
        $data = $this->m_kustomer->TampilkanDataKustomer();
        $response = array('data' => $data);
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    //_________________________________________________________________________________________________________________________

    public function TambahDataKustomer()
    {
        $item_data = array(
            'kustomer_name'    => $this->input->post('nama'),
            'kustomer_phone'   => $this->input->post('telp'),
            'kustomer_address' => $this->input->post('alamat')
        );
        $this->m_kustomer->TambahDataKustomer($item_data);
        redirect('kustomer');
    }

    //_________________________________________________________________________________________________________________________

    public function HapusDataKustomer($kustomerId)
    {
        $this->m_kustomer->HapusDataKustomer($kustomerId);

        $response = array(
            'status' => 'success',
            'message' => 'Item deleted successfully.'
        );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    //_________________________________________________________________________________________________________________________

    public function AmbilDataKustomer($kustomerId)
    {
        $itemData = $this->m_kustomer->AmbilDataKustomer($kustomerId);

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($itemData));
    }

    //_________________________________________________________________________________________________________________________

    public function UbahDataKustomer()
    {
        $kustomerId = $this->input->post('kustomer_id');

        $itemData = array(
            'kustomer_name'    => $this->input->post('kustomer_name'),
            'kustomer_phone'   => $this->input->post('kustomer_phone'),
            'kustomer_address' => $this->input->post('kustomer_address')
        );

        $this->m_kustomer->UbahDataKustomer($kustomerId, $itemData);

        redirect('kustomer');
    }

    //_________________________________________________________________________________________________________________________

}
