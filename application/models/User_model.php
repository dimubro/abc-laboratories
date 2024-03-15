<?php
class User_model extends MY_Model
{

	function __construct()
	{
		parent::__construct();
	}

	var $_table = "user",
		$primary_key = "UserId";

	var $before_create = ['prop_data_before_create'];
	var $before_update = ['prop_data_before_update'];

	public function get_user_details_login($user_name, $new_pw)
	{
		$this->db->where('UserName like binary', $user_name);
		$this->db->where('Password', $new_pw);
		$this->db->where('IsDeleted', 0);
		$data = $this->db->get('user');
		return $data->row();
	}
	
	public function check_login($user_name, $password)
	{
		$this->db->select('ClientId, ClientName, Email, Type, CheckOtp');
		$this->db->where('Email like binary', $user_name);
		$this->db->where('Password', $password);
		$data = $this->db->get('clients');
		return $data->row();
	}
	public function check_user($user_name, $user_id = 0){
	$this->db->where('UserName', $user_name);
	if($user_id){
		$this->db->where('UserId!=', $user_id);
	}
	$data = $this->db->get('user');
	return $data->result();
}
public function insert($post){
	return $this->db->insert('user', $post);
}
public function get_details(){
	$this->db->where('IsDeleted', 0);
	$data = $this->db->get('user');
	return $data->result();
}
public function get_user_details($user_id){
	$this->db->where('UserId', $user_id);
	$data = $this->db->get('user');
	return $data->row();
}
public function check_user_update($UserName, $user_id){
	$this->db->where('UserName', $UserName);
	$this->db->where('UserId !=', $user_id);
	$data = $this->db->get('user');
	return $data->result();
}
public function update_user($post, $user_id){
	$this->db->where('UserId', $user_id);
	return $this->db->update('user', $post);
}
// public function get_user_details_login($user_name, $new_pw){
// 	$this->db->where('UserName like binary', $user_name);
// 	$this->db->where('Password', $new_pw);
// 	$this->db->where('IsDeleted', 0);
// 	$data = $this->db->get('user');
// 	return $data->row();
// }

}
