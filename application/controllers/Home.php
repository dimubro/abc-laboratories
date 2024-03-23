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
    $this->load->model('Appoinment_model', 'model');
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
  public function save_booking(){
    if($post = $this->input->post('form')){
      // print_r($post);
      $post['TestTypeId'] = $this->input->post('TestTypeId');
      $post['TestId'] = $this->input->post('TestId');
      $post['PatientId'] = $this->session->patient->PatientId;
      $post['BookingDate'] = date('Y-m-d H:i:s');
      $test = $this->test->get_data($post['TestId']);
      $post['Price'] = $test->Price;
      // print_r($post);
      $appoinment_id = $this->model->insert_appoinment($post);
      $d['AppoinmentNo'] = "#".str_pad($appoinment_id, 5, "0", STR_PAD_LEFT);
      $res = $this->model->update_appoinment($appoinment_id, $d);
      redirect(base_url().'payment/'.$appoinment_id);
    }
  }
  public function payment($appoinment_id){
    $data['obj'] = $this->model->get_appoinment_data($appoinment_id);
    $this->view('payment', $data);
  }
  public function save_payment(){
    if($post = $this->input->post('form')){
      // print_r($post);
      $data['Status'] = 1;
      $res = $this->model->update_appoinment($post['AppoinmentId'], $data);
      redirect(base_url().'appoinment-summery/'.$post['AppoinmentId']);
    }
  }
  public function summery($appoinment_id){
    $data['obj'] = $this->model->get_appoinment_data($appoinment_id);
    $data['test'] = $this->test->get_data($data['obj']->TestId);
    $data['type'] = $this->type->get_data($data['obj']->TestTypeId);
    $data['room'] = $this->room->get_room_details($data['type']->RoomId);
    $this->send_email($appoinment_id);
    $this->view('summery', $data);
  }
  public function send_email($appoinment_id){
    $data['obj'] = $this->model->get_appoinment_data($appoinment_id);
    $data['test'] = $this->test->get_data($data['obj']->TestId);
    $data['type'] = $this->type->get_data($data['obj']->TestTypeId);
    $data['room'] = $this->room->get_room_details($data['type']->RoomId);

    



    $config = array(
    'protocol'  => 'smtp',
    'smtp_host' => smtp_host,
    'smtp_port' => 465,
    'smtp_user' => smpt_email,
    'smtp_pass' => smtp_password,
    'mailtype'  => 'html',
    'charset'   => 'utf-8'

);
      // echo $mge;
      $msg = "<h2>Appointment Details: ".$data['obj']->AppoinmentNo."</h2>
      <p><strong>Date:</strong> ".$data['obj']->AppoinmentDate."</p>
      <p><strong>Time:</strong> ".$data['obj']->Time."</p>
      <p><strong>Room Number:</strong> ".$data['room']->RoomNumber."</p>
      <p><strong>Test:</strong> ".$data['test']->TestTitle."</p>

      <p>We look forward to seeing you at the meeting. If you have any questions or need to reschedule, please let us know.</p>

      <p>Best regards,<br>
      ".TITLE."</p>";
      // echo $msg;

      $this->load->library('email');
      $config['mailtype'] = 'html';
      $this->email->initialize($config);
      $this->email->to($this->session->patient->Email);
      $this->email->from('noreply@abclaboratories.com', title);
      $this->email->subject("ABC laboratories- Appoinment - ".$data['obj']->AppoinmentNo);
      $this->email->message($msg);
      $this->email->send();
  }
}

