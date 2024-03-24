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
	public function get_appoinment_data($appoinment_id){
		$this->db->where('AppoinmentId', $appoinment_id);
		$data = $this->db->get('appoinment');
		return $data->row();
	}
	public function get_toay_appoinmets(){
		$this->db->select('appoinment.*, patient.*, test.*, room.*');
		$this->db->from('appoinment');
		$this->db->join('patient', 'patient.PatientId=appoinment.PatientId');
		$this->db->join('test', 'test.TestId=appoinment.TestId');
		$this->db->join('test_type', 'test_type.TestTypeId=appoinment.TestTypeId');
		$this->db->join('room', 'room.RoomId=test_type.RoomId');
		$this->db->where('test.IsDeleted', 0);
		$this->db->where('test_type.IsDeleted', 0);
		$this->db->where('appoinment.Status>', 0);
		$this->db->where('appoinment.AppoinmentDate', date('Y-m-d'));
		if($this->session->user->UserType==2){
			$this->db->where('appoinment.TestTypeId', $this->session->user->TestTypeId);
		}
		$this->db->order_by('appoinment.AppoinmentId', 'desc');
		$data= $this->db->get();
		return $data->result();
	}
	public function get_all_appoinmets(){
		$this->db->select('appoinment.*, patient.*, test.*, room.*');
		$this->db->from('appoinment');
		$this->db->join('patient', 'patient.PatientId=appoinment.PatientId');
		$this->db->join('test', 'test.TestId=appoinment.TestId');
		$this->db->join('test_type', 'test_type.TestTypeId=appoinment.TestTypeId');
		$this->db->join('room', 'room.RoomId=test_type.RoomId');
		$this->db->where('test.IsDeleted', 0);
		$this->db->where('test_type.IsDeleted', 0);
		$this->db->where('appoinment.Status>', 0);
		// $this->db->where('appoinment.AppoinmentDate', date('Y-m-d'));
		if($this->session->user->UserType==2){
			$this->db->where('appoinment.TestTypeId', $this->session->user->TestTypeId);
		}
		$this->db->order_by('appoinment.AppoinmentId', 'desc');
		$data= $this->db->get();
		return $data->result();
	}
	public function get_appointment($appointment_id){
		$this->db->select('appoinment.*, patient.*, test.*, room.*');
		$this->db->from('appoinment');
		$this->db->join('patient', 'patient.PatientId=appoinment.PatientId');
		$this->db->join('test', 'test.TestId=appoinment.TestId');
		$this->db->join('test_type', 'test_type.TestTypeId=appoinment.TestTypeId');
		$this->db->join('room', 'room.RoomId=test_type.RoomId');
		$this->db->where('test.IsDeleted', 0);
		$this->db->where('test_type.IsDeleted', 0);
		$this->db->where('appoinment.Status>', 0);
		// $this->db->where('appoinment.AppoinmentDate', date('Y-m-d'));
		// if($this->session->user->UserType==2){
		// 	$this->db->where('appoinment.TestTypeId', $this->session->user->TestTypeId);
		// }
		$this->db->where('appoinment.AppoinmentId', $appointment_id);
		// $this->db->order_by('appoinment.AppoinmentId', 'desc');
		$data= $this->db->get();
		return $data->row();
	}
}