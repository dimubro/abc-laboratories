<?php
class Rooms_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function insert($post){
		return $this->db->insert('room', $post);
	}
	public function check_already($room_number, $room_id){
		$this->db->where('IsDeleted', 0);
		if($room_id){
			$this->db->where('RoomId!=', $room_id);
		}
		$this->db->where('RoomNumber', $room_number);
		$data = $this->db->get('room');
		return $data->result();
	}
	public function get_all_rooms(){
		$this->db->where('IsDeleted', 0);
		$this->db->order_by('RoomNumber', 'asc');
		$data = $this->db->get('room');
		return $data->result();
	}
	public function get_room_details($room_id){
		$this->db->where('RoomId', $room_id);
		$data = $this->db->get('room');
		return $data->row();
	}
	public function update($RoomId, $post){
		$this->db->where('RoomId', $RoomId);
		return $this->db->update('room', $post);
	}
}