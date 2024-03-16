<?php
class Test_type_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert($post){
		return $this->db->insert('test_type', $post);
	}
	public function get_assigned_rooms($TestTypeId=0){
		$this->db->where('IsDeleted', 0);
		if($TestTypeId){
			$this->db->where('TestTypeId!=', $TestTypeId);
		}
		$data = $this->db->get('test_type');
		return $data->result();
	}
	public function get_all_rooms($rooms){
		$this->db->where('IsDeleted', 0);
		if($rooms){
			$this->db->where_not_in('RoomId', $rooms);
		}
		
		$this->db->order_by('RoomNumber', 'asc');
		$data = $this->db->get('room');
		return $data->result();
	}
	public function get_all(){
		// $this->db->where('IsDeleted', 0);
		// $this->db->order_by('TestTypeId', 'desc');
		// $data = $this->db->get('test_type');
		// return $data->result();
		$this->db->select('*');
		$this->db->from('test_type');
		$this->db->join('room', 'room.RoomId=test_type.RoomId');
		$this->db->where('test_type.IsDeleted', 0);
		$data = $this->db->get();
		return $data->result();
	}
	public function get_data($TestTypeId){
		$this->db->where('TestTypeId', $TestTypeId);

		$data = $this->db->get('test_type');
		return $data->row();
	}
	public function update($TestTypeId, $post){
		$this->db->where('TestTypeId', $TestTypeId);
		return $this->db->update('test_type', $post);
	}
}