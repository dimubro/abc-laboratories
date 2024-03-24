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
   public function view_appointment($appointment_id){
    $data['obj'] = $this->model->get_appointment($appointment_id);
    $this->load->view('appointment/view_appointment', $data);
   }
   public function upload_report(){
        $appointment_id = $this->input->post('AppoinmentId');
        $config['upload_path']          = './media/reports';
        $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('report')) {
            $this->session->set_flashdata('notification', '<div class="alert alert-danger">
                    <strong>wrong!</strong> Somthing went wrong !!!
                  </div>');
        }else{
            $data = $this->upload->data();
            $post['Report'] = $data['file_name'];
            $post['Status'] = 2;
            print_r($post);
            $res = $this->model->update_appoinment($appointment_id, $post);
            $this->session->set_flashdata('notification', '<div class="alert alert-success">
                    <strong>Success!</strong> Record succesfully updated !!!
                  </div>');
        }
        redirect(base_url().'admin/View-Appointment/'.$appointment_id);
   }
    
}