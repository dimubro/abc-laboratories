<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Test extends MY_Controller
//class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Test_model', 'model');
		// $this->load->model('Batch_model', 'batch');
		
	}
	public function index(){
		// echo "els";
		$this->load->view('test/index');
	}
	public function create(){
		$this->load->view('test/create');
	}
	// public function save(){
	// 	if($post = $this->input->post('form')){

	// 	}else{
	// 		$post['CreatedBy'] = $this->session->user->UserId;
	// 		print_r($post);
	// 	}
	// }
	public function save_form(){
		if($post = $this->input->post('form')){
			if($post['IsDiscount']==1){
				$post['IsDiscount'] = 1;
			}else{
				$post['IsDiscount'] = 0;
			}
			
			// $post['CreatedBy'] = $this->session->user->UserId;
			// print_r($post);
		}

	}

}