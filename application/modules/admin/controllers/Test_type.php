<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Test_type extends MY_Controller
//class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Test_type_model', 'model');
		$this->load->model('Rooms_model', 'rooms');
		// $this->load->model('Batch_model', 'batch');
		
	}
    function index()
    {
    	$data['records'] = $this->model->get_all();
    	$this->load->view('test_type/index', $data);

    }
    public function edit($TestTypeId){
    	$types = $this->model->get_assigned_rooms($TestTypeId);
    	$rooms = array();
    	foreach ($types as $k => $val) {
    		$rooms[] = $val->RoomId;
    	}
    	$data['rooms'] = $this->model->get_all_rooms($rooms);
    	$data['obj'] = $this->model->get_data($TestTypeId);
    	$this->load->view('test_type/create', $data);
    }
    public function create(){
    	$types = $this->model->get_assigned_rooms(0);
    	$rooms = array();
    	foreach ($types as $k => $val) {
    		$rooms[] = $val->RoomId;
    	}
    	$data['rooms'] = $this->model->get_all_rooms($rooms);
    	$this->load->view('test_type/create', $data);
    }
    public function save_form(){
    	if ($post = $this->input->post('form')) {
    		 	$this->img_width = '690px';
                $this->img_height = '390px';
                $config['upload_path']          = './media/image';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('Image')) {
                    $error = array('error' => $this->upload->display_errors());
                    // $this->session->set_flashdata('notification', '<div class="alert alert-custom alert-default" role="alert"><div class="alert-icon"><i class="flaticon-danger text-primary"></i></div><div class="alert-text">File Not Uploaded!</div></div>');
                } else {
                    $data = $this->upload->data();
                    $this->crop($data);
                    $post['Image'] = $data['file_name'];
                }
            $TestTypeId = $this->input->post('TestTypeId');
            if($TestTypeId){
                $res = $this->model->update($TestTypeId, $post);
                if($res){
                    $this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully updated !!!
                  </div>');
                }else{
                    $this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
                }
                redirect(base_url().'admin/Edit-Test-Types/'.$TestTypeId);
            }else{
            	// print_r($post);
            	$post['CreatedBy'] = $this->session->user->UserId;
            	// print_r($post);
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
            	redirect(base_url().'admin/Create-Test-Type');
            }
    	}

    }
    public function delete($TestTypeId){
        $data = array('IsDeleted' => 1 );
        $res = $this->model->update($TestTypeId, $data);
            if($res){
                $this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully updated !!!
                  </div>');
            }else{
                $this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
            }
        redirect(base_url().'admin/Test-Types');
    }

}