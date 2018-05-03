<?php
class Comment_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Barang_M');
		$this->load->helper('url');
    }
    public function index(){
		$barang = $this->Barang_M->get_barang($this->input->get('idproduk', TRUE));
		$data = array('barang'=>$barang);
		$this->load->view('commentpage',$data);
    }
}
