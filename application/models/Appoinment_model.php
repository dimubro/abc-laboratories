<?php
class Appoinment_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert_appoinment($post){
		$this->db->insert('appoinment', $post);
		return $this->db->insert_id();
	}
	public function update_appoinment($appoinment_id, $d){
		$this->db->where('AppoinmentId', $appoinment_id);
		return $this->db->update('appoinment', $d);
	}
}