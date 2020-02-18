<?php
class Register extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Register_model');
        $this->load->helper('url');
    }

    public function index(){     
        $this->load->helper('form');   
        $data['title'] = 'Register';
        $this->load->view('header/header', $data);
        $this->load->view('register/index');
        $this->load->view('footer/footer');
    }

    public function create(){
        $data['users'] = $this->Register_model->get_userByAccount();
        if(count($data['users'])==0){
            $data['users'] = $this->Register_model->set_user();
            $data['title'] = 'Register success. Please check your email to activate your count.';
            $this->load->view('header/header', $data); 
            $this->load->view('register/verification', $data);             
            $this->load->view('footer/footer');
        }else{
            $data['title'] = 'identity_card had been used';
            $this->load->view('header/header', $data);
            $this->load->view('footer/footer');
        }
    }

    public function verification($verification){
        $this->Register_model->update_userStatus($verification);        
        $data['title'] = 'Verification success';
        $this->load->view('header/header', $data);              
        $this->load->view('footer/footer');
    }  
}
?>