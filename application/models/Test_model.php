<?php
class Test_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert($post){
		return $this->db->insert('test', $post);
	}
	public function get_all(){
		$this->db->select('test.*, test_type.TestTitle');
		$this->db->from('test');
		$this->db->join('', '');
	}
}