<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Rooms extends MY_Controller
//class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Rooms_model', 'model');
		// $this->load->model('Batch_model', 'batch');
		
	}
	public function index(){
		$data['records'] = $this->model->get_all_rooms();
		$this->load->view('rooms/index', $data);
	}
	public function create(){
		$this->load->view('rooms/create');
	}
	public function edit($room_id){
		$data['obj'] = $this->model->get_room_details($room_id);
		$this->load->view('rooms/create', $data);
	}
	public function save_room(){
		if($post = $this->input->post('form')){
			$RoomId = $this->input->post('RoomId');
			if($RoomId){
				$check = $this->model->check_already($post['RoomNumber'], $RoomId);
				if($check){
					$this->session->set_flashdata('notification', '<div class="alert alert-info">
                    <strong>ops !</strong> Record already exists !!!
                  </div>');
				}else{
					$res = $this->model->update($RoomId, $post);
					if($res){
						$this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully updaetd !!!
                  </div>');
					}else{
						$this->session->set_flashdata('notification', '<div class="alert alert-success">
  <strong>Your Patient no: ABC-12345</strong> Your account has been created please login!!
</div>');
					}
					
				}
				redirect(base_url().'admin/Edit-Room/'.$RoomId);
			}else{
				$post['CreatedBy'] = $this->session->user->UserId;
				$check = $this->model->check_already($post['RoomNumber'], 0);
				if($check){
					$this->session->set_flashdata('notification', '<div class="alert alert-info">
                    <strong>ops !</strong> Record already exists !!!
                  </div>');
				}else{
				$res = $this->model->insert($post);
				if($res){
					$this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully saved !!!
                  </div>');
				}else{
					$this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
				}
				}	
				redirect(base_url().'admin/Create-Room');
			}
		}
	}
	public function delete($room_id){
		$data = array('IsDeleted' => 1 );
		$res = $this->model->update($room_id, $data);
		if($res){
					$this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully deleted !!!
                  </div>');
				}else{
					$this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
				}
		redirect(base_url().'admin/Rooms');
	} 

}