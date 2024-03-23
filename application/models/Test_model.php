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
		$this->db->select('test.*, test_type.TestTitle as test_cate_title, test.TestTitle as test_title');
		$this->db->from('test');
		$this->db->join('test_type', 'test_type.TestTypeId=test.TestTypeId');
		$this->db->where('test.IsDeleted', 0);
		$this->db->where('test_type.IsDeleted', 0);
		$this->db->order_by('TestId', 'desc');
		$data = $this->db->get();
		return $data->result();
	}
	public function get_data($TestId){
		$this->db->where('TestId', $TestId);
		$data = $this->db->get('test');
		return $data->row();
	}
	public function update($TestId, $post){
		$this->db->where('TestId', $TestId);
		return $this->db->update('test', $post);
	}
	public function get_all_home($test_type_id){
		$this->db->where('TestTypeId', $test_type_id);
		$this->db->where('IsDeleted', 0);
		$data = $this->db->get('test');
		return $data->result();
	}
}