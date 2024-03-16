<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class User extends CI_Controller
//class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'model');
		// $this->load->model('Batch_model', 'batch');
		$this->load->model('Test_type_model', 'test_type');
	}
    function index()
    {
    	$data['records'] = $this->model->get_details();
    	$this->load->view('user/index', $data);

    }

    public function create(){
    	$data['records'] = $this->test_type->get_all();
			$this->load->view('user/create', $data);
    }
    public function save_user(){
    	if ($post = $this->input->post('form')) {
    		$UserId = $this->input->post('UserId');
    		if($UserId){
    			$post['PlanePassword'] = $post['Password'];
    			$post['Password'] = sha1($post['Password']);

    			$check = $this->model->check_user($post['UserName'], $UserId);
    			if($check){
    				$this->session->set_flashdata('notification', '<div class="alert alert-info">
                    <strong>ops !</strong> Record already exists !!!
                  </div>');
    			}else{
    				$res = $this->model->update_user($post, $UserId);
    				if($res){
	    				$this->session->set_flashdata('notification', '<div class="alert alert-success">
	                    <strong>Success!</strong> Record succesfully updated !!!
	                  </div>');
	    			}else{
	    				$this->session->set_flashdata('notification', '<div class="alert alert-danger">
	                    <strong>wrong!</strong> Somthing went wrong !!!
	                  </div>');
	    			}

    			}
    			redirect(base_url().'admin/Edit-User/'.$UserId);

    		}else{
    			// print_r($post);
    			$post['PlanePassword'] = $post['Password'];
    			$post['Password'] = sha1($post['Password']);
    			$post['CreatedBy'] = $this->session->user->UserId;
    			// print_r($post);
    			$check = $this->model->check_user($post['UserName'], 0);
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
    		}
    		redirect(base_url().'admin/Create-User');
    		
    	}
    }
    public function edit($user_id){
    $data['records'] = $this->test_type->get_all();
		$data['obj'] = $this->model->get_user_details($user_id);
		$this->load->view('user/create', $data);
		
	}
	public function delete($user_id){
		$data = array('IsDeleted' => 1 );
		$res = $this->model->update_user($data, $user_id);
		if ($res) {
			$this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully deleted !!!
                  </div>');
		}else{
			$this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
		}
		redirect(base_url().'admin/User');
	}

}