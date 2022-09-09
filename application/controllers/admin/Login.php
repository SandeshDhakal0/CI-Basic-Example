<?php 

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin'))
        redirect('admin/dashboard');
    } 

    public function index()
    {
        // $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('admin/login');
    }

    public function verify()
    {    
           $this->load->model('admin');
           $check = $this->admin->validate();
           if($check)
           {
                $this->session->set_userdata('admin','1');
                redirect('admin/dashboard');
           }
           else
           {
            redirect('admin');
           }    
     } 
}