<?php
class Billing_C extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
            $this->load->model('Billing_M');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->library('javascript');
            $this->load->library('javascript/jquery');
    }    
    public function index()
    {
        $this->load->view('billingpage1');
    }
    public function pesan()
    {
        $data = $this->input->post(null,TRUE);
        $insert = $this->Billing_M->pesan($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_daftar');
            //isi dengan flash data disini
            redirect('Billing_C/index');
        }else{
            echo "<script>alert('Gagal Daftar');</script>";
        }

    }
    
}
