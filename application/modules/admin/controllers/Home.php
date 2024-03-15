<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();


		if ($this->session->has_userdata('user')) {
			// $this->load->model('Orders_model', 'model');
		} else {
		//	redirect(base_url() . 'admin/login');
		}

	}
	function index()
	{
		if ($this->session->has_userdata('user')) {
			
			//print_r($d['events']);
			$this->load->view('dashboard',$d);
		} else {
			redirect(base_url() . 'admin/login');
		}
	}
	// public function create_slider(){
    //   $this->load->view('slider/create');
  	// }
}
