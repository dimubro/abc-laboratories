<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Front_Controller
{
	function __construct()
  {
    parent::__construct();

    $this->load->model('Patient_model', 'model');
    $this->load->library('pagination');
    $this->load->library('form_validation');
    $this->encryption->initialize(
        array(
                'cipher' => 'aes-256',
                'mode' => 'ctr',
                'key' => '<a 16-character random string>'
        )
      );
  }
	public function register(){
		$this->view('register');
	}
	public function save_register(){
		if($post = $this->input->post('form')){
			$this->form_validation->set_rules('form[FullName]', 'Full Name', 'required');
			$this->form_validation->set_rules('form[Email]', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('form[Phone]', 'Phone', 'required');
			$this->form_validation->set_rules('form[Password]', 'Password', 'required');
			$this->form_validation->set_rules('form[DOB]', 'DOB', 'required');
			if($this->form_validation->run()){
				// print_r($post);
				$post['Password'] = sha1($post['Password']);
				$post['RegisterDate'] = date("Y-m-d H:i:s");
				// print_r($post);
				$check_allready = $this->model->check_alrady($post['Email']);
				if($check_allready){
					$this->session->set_flashdata('notification', '<div class="alert alert-info">
                    <strong>Ops!</strong> you have a account, please login!!
                  </div>');
				}else{
				$petient_id = $this->model->insert($post);
				// echo $petient_id;
				$d['PatientNo'] = "ABC-".str_pad($petient_id, 5, "0", STR_PAD_LEFT);
				$res = $this->model->update($petient_id, $d);
				if($res){
					$this->session->set_flashdata('notification', '<div class="alert alert-success">
  						<strong>Your Patient no: '.$d['PatientNo'].'</strong> Your account has been created please login!!</div>');
				}else{
					$this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
				}
			}
			}
			// print_r($post);
		}	
		redirect(base_url().'register');
	}
	public function login(){
		$this->view('login');
	}
	public function check_login(){
		if($this->input->post('Email')){
			$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('Password', 'Password', 'required');
			if($this->form_validation->run()){
				
				 $user = $this->model->login($this->input->post('Email'), sha1($this->input->post('Password')));
				 // print_r($user);
				 if($user){
				 	$this->session->set_userdata("patient", $user);
				 	redirect(base_url());
				 }else{
				 	$this->session->set_flashdata('notification', '<div class="alert alert-info">
                    <strong>Ops!</strong> check your email or password!!
                  </div>');
				 	redirect(base_url().'login');
				 }
				 

			}else{
				redirect(base_url().'login');
			}
		}
	}
	public function log_out(){
		$this->session->sess_destroy();
    	unset($_SESSION);
    	redirect(base_url());
	}
}