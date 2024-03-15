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
   
    
}