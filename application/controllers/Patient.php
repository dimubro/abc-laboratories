<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Patient extends Front_Controller
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
  public function index(){
    $this->view('profile/index');
  }
}