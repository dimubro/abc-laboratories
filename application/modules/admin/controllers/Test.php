<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Test extends MY_Controller
//class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Test_model', 'model');
		$this->load->model('Test_type_model', 'test_type');
		// $this->load->model('Batch_model', 'batch');
		
	}
	public function index(){
		// echo "els";
		$data['records'] = $this->model->get_all();
		$this->load->view('test/index', $data);
		// print_r($data['records']);
	}
	public function create(){
		$data['test_type'] = $this->test_type->get_all();
		$this->load->view('test/create', $data);
	}
	public function edit($TestId){
		$data['test_type'] = $this->test_type->get_all();
		$data['obj'] = $this->model->get_data($TestId);
		$this->load->view('test/create', $data);
		// print_r($data['obj']);
		// echo $TestId;
	}
	public function save_form(){
		if($post = $this->input->post('form')){
			if($post['IsDiscount']==1){
				$post['IsDiscount'] = 1;
			}else{
				$post['IsDiscount'] = 0;
			}
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

			// $post['CreatedBy'] = $this->session->user->UserId;
			$TestId = $this->input->post('TestId');
			if($TestId){
				$res = $this->model->update($TestId, $post);
				if($res){
            		$this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully updated !!!
                  </div>');
            	}else{
            		$this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
            	}
            	redirect(base_url().'admin/Edit-Test/'.$TestId);
			}else{
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
            	redirect(base_url().'admin/Create-Test');
			}
		}

	}
	public function delete($TestId){
		$data = array('IsDeleted' => 1 );
		$res = $this->model->update($TestId, $data);
		if($res){
            $this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully deleted !!!
                  </div>');
         }else{
            $this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
        }
        redirect(base_url().'admin/Tests');
	}

}