<?php
class Item_model extends CI_Model {

	public function __construct()
	{
        $this->load->database();               
	}

	public function get_message()
	{
       	$query = $this->db->get('item');
    	return $query->result_array();	
	}	
}
?>