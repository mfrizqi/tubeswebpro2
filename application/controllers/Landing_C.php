<?php
class Landing_C extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
            $this->load->model('Landing_M');
            $this->load->helper('url');
            $this->load->library('javascript');
            $this->load->library('javascript/jquery');
    }    
    public function index()
    {
        $data = array(
            'barang' => $this->Landing_M->get_data()
        );
        $this->load->view('landing',$data);
    }
    
}
