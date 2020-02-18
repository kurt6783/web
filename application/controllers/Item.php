<?php
class Item extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index(){
        $data['items'] = $this->Item_model->get_message();
        $data['title'] = 'item';
        $this->load->view('header/header', $data);
        $this->load->view('item/index', $data);
        $this->load->view('footer/footer');
    }        
}
?>