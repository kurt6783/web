<?php
class Register_model extends CI_Model {
	public function __construct(){
        $this->load->database();               
	}

	public function get_userByAccount(){
		$this->load->helper('url');
		$query = $this->db->get_where('user',array('identity_card' => $this->input->post('identity_card'),));
    	return $query->result_array();	
	}

	public function get_userByVerification(){
		$this->load->helper('url');
		$query = $this->db->get_where('user',array('verification' => $this->input->post('verification'),));
    	return $query->result_array();	
	}

	public function update_userStatus($verification){
		$this->load->helper('url');		
		$data = array(
			'status' => 1		
		);
		$this->db->where('verification',$verification);		
		return $this->db->update('user',$data);
	}

	public function set_user(){
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('string');
		$this->load->helper('security');
        $data = array(
            'account' => $this->input->post('account'),
            'password' => do_hash($this->input->post('password'),'MD5'),
            'identity_card' => $this->input->post('identity_card'),
            'phone' => $this->input->post('phone'),
            'email'=> $this->input->post('email'),
            'birthday' => $this->input->post('birthdayYear')."-".
            			  $this->input->post('birthdayMonth')."-".
            			  $this->input->post('birthdayDay'),
            'verification' => random_string('alnum',20),
            'status' => 0
        );       
        return $this->db->insert('user', $data);
	}
}
?>