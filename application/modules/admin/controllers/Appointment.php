<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Appointment extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Slider_model', 'model');
        $this->load->model('Appoinment_model', 'model');
        $this->controller = get_class();
    }
   public function today(){
     // echo "ela";
    $data['records'] = $this->model->get_toay_appoinmets();
    $this->load->view('appointment/today', $data);
   }
   public function all_apointment(){
    $data['records'] = $this->model->get_all_appoinmets();
    $this->load->view('appointment/all_appointment', $data);
   }
    
}