<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Front_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Test_type_model', 'type');
  }

  public function error()
  {
    $this->view('404');
  }

  public function index()
  {
    
    $this->view('index', $d);
  }
  public function test_type(){
    $data['records'] = $this->type->get_all();
    $this->view('test_type', $data);
  }

}

