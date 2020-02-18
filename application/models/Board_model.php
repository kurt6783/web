<?php
class Board_model extends CI_Model {

	public function __construct()
    {
        $this->load->database();               
	}

	public function get_message(){
       	$query = $this->db->get('board');
    	return $query->result_array();	
	}

	public function set_message()
    {
		$this->load->helper('url');
        $timezone = new DateTimeZone('Asia/Taipei');
        $datetime = new DateTime('now', $timezone);
        $data = array(
            'id' => $this->input->post('id'),
            'user' => $this->input->post('user'),
            'message' => $this->input->post('message'),
            'datetime' => $datetime->format('Y-m-d H:i:s')
        );
        return $this->db->insert('board', $data);
	}	

    public function update_message()
    {
        $this->load->helper('url');
        $data= array(
            'message' => $this->input->post('message')
        );
        $this->db->where('id',$this->input->post('id'));
        return $this->db->update('board',$data);
    }

    public function delete_message()
    {
        $this->load->helper('url');
        $data= array(
            'id' => $this->input->post('id')
        );        
        return $this->db->delete('board',$data);
    }
}
?>