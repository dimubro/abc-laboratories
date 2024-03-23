<?php
class Patient_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert($post){
		$this->db->insert('patient', $post);
		return $this->db->insert_id();
	}
	public function update($petient_id, $post){
		$this->db->where('PatientId', $petient_id);
		return $this->db->update('patient', $post);
	}
	public function check_alrady($email){
		$this->db->where('Email', $email);
		$data = $this->db->get('patient');
		return $data->row();
	}
	public function login($email, $password){
		$this->db->where('Email like binary', $email);
		$this->db->where('Password', $password);
		// $this->db->where('IsDeleted', 0);
		$data = $this->db->get('patient');
		return $data->row();
	}
}