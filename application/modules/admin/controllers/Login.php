<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'model');
	}

	function index()
	{
		$this->load->view('user/login');
	}
	
	public function check_login()
	{

		if (isset($_POST['btn_save'])) {
			$post = $this->input->post('form');
			$new_pw = sha1($post['Password']);
			$user = $this->model->get_user_details_login($post['username'], $new_pw);
			if ($user) {
				$this->session->set_userdata("user", $user);
				if ($this->session->userdata('url')) {
					redirect(base_url() . 'admin');
				} else {
					redirect(base_url() . 'admin');
				}
			} else {
				$this->session->set_flashdata('notification', 'Sorry, Invalid Username and Password, please check and try again.');
				redirect(base_url() . 'admin/login');
			}
		}
	}

	public function log_out()
	{
		$this->session->unset_userdata('url');
		$this->session->sess_destroy();
		unset($_SESSION);
		redirect(base_url() . 'admin');
	}
}
