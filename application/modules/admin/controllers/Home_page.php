<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";
class Home_page extends MY_Controller
{
    var $page = "brand";
    var $img_width = '1024px';
    var $img_height = '420px';

    function __construct()
    {
        parent::__construct();
        // $this->load->model('Slider_model', 'model');
        $this->load->model('Home_model', 'model');
        $this->controller = get_class();
    }
    public function create_slider(){
        $this->load->view('slider/create');
    }
    public function manage_slider(){
        $data['records'] = $this->model->get_slider_list();
        $this->load->view('slider/index', $data);
    }
    public function slider_form($slider_id=0){
        if ($post = $this->input->post('form')) {
            if ($post['IsShowDescription']==1) {
                $post['IsShowDescription']=1;
            }else{
                $post['IsShowDescription']=0;
            }
            if ($post['IsShowButton']==1) {
                $post['IsShowButton']=1;
            }else{
                $post['IsShowButton']=0;
            }
            if ($post['IsShowTitle']==1) {
                $post['IsShowTitle']=1;
            }else{
                $post['IsShowTitle']=0;
            }
            if ($slider_id) {
                $res = $this->model->update_slider_details($slider_id, $post);
                if($res){
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Slider Update Success!! </strong>']);
                }else{
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Edit-Slider/'.$slider_id);
            }else{
                $post['CreatedBy'] = $this->session->user->UserId;
                $res = $this->model->insert_slider($post);
                if ($res) {
                    $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Slider Create Success!! </strong>']);
                }else{
                    $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
                }
                redirect(base_url().'admin/Create-Slider');
            }
        }
    }
    public function edit_slider($slider_id){
        $data['obj'] = $this->model->get_slider_details($slider_id);
        $this->load->view('slider/create', $data);
    }
    public function delete_slider($slider_id){
        $data = array('IsDeleted' => 1 );
        $res = $this->model->update_slider_details($slider_id, $data);
        if ($res) {
            $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Slider Delete Success!! </strong>']);
        }else{
            $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> Failure !!! </strong>']);
        }
        redirect(base_url().'admin/Manage-Slider');
    }
    public function re_arrange_slider(){
        $data['records'] = $this->model->get_slider_list();
        $this->load->view('slider/rearrange', $data);
    }
    
}