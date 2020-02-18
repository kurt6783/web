<?php
class Board extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Board_model');
    }

    public function index()
    {
        $data['boards'] = $this->Board_model->get_message();
        $data['title'] = 'Message board';
        $this->load->view('header/header', $data);
        $this->load->view('board/index', $data);    
        $this->load->view('footer/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Add a new message';
        $this->form_validation->set_rules('user', 'user', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('header/header', $data);
            $this->load->view('board/create');
            $this->load->view('footer/footer');
        }
        else
        {   
            $this->Board_model->set_message();
            $data['boards'] = $this->Board_model->get_message();
            $data['title'] = 'Message board';
            $this->load->view('header/header', $data);
            $this->load->view('board/success');
            $this->load->view('footer/footer');          
        }
    } 

    public function update()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Update message';
        $this->form_validation->set_rules('message', 'message', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('header/header', $data);
            $this->load->view('board/update');
            $this->load->view('footer/footer');
        }
        else
        {
            $this->Board_model->update_message();
            $data['boards'] = $this->Board_model->get_message();
            $data['title'] = 'Message board';
            $this->load->view('header/header', $data);
            $this->load->view('board/success');
            $this->load->view('footer/footer');          
        }
    }

    public function delete()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Delete message';
        $this->form_validation->set_rules('id', 'ID', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('header/header', $data);
            $this->load->view('board/delete');
            $this->load->view('footer/footer');
        }
        else
        {
            $this->Board_model->delete_message();
            $data['boards'] = $this->Board_model->get_message();
            $data['title'] = 'Message board';
            $this->load->view('header/header', $data);
            $this->load->view('board/success');
            $this->load->view('footer/footer');          
        }
    }              
}
?>