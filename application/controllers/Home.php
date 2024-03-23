<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Front_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Test_type_model', 'type');
    $this->load->model('Test_model', 'test');
    $this->load->model('Rooms_model', 'room');
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
  public function medical_tests($title, $test_type_id){
    $data['obj'] = $this->type->get_data($test_type_id);

    $data['records'] = $this->test->get_all_home($test_type_id);

    $this->view('tests', $data);
  }
  public function booking($title, $test_id){
    $data['obj'] = $this->test->get_data($test_id);
    $data['type'] = $this->type->get_data($data['obj']->TestTypeId);
    $data['room'] = $this->room->get_room_details($data['type']->RoomId);
    $this->view('booking', $data);
  }

}

