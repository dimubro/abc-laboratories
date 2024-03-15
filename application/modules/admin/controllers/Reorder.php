<?php
include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Reorder extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Update_order_model', 'model');
        $this->load->helper(array('form', 'url'));
    }

    public function do_update()
    {
        $this->model->update_order();
    }

    public function do_category_update()
    {
        $this->model->update_category_order();

    }

    public function do_subcategory_update()
    {
        $this->model->update_category_order();

    }

    public function do_secondsubcategory_update()
    {
        $this->model->update_category_order();

    }

    public function do_brand_update()
    {
        $this->model->update_brand_order();

    }





}