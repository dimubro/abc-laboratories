<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Front_Controller
{
  function __construct()
  {
    parent::__construct();
    
  }

  public function error()
  {
    $this->view('404');
  }

  public function index()
  {
    
    $this->view('index', $d);
  }
  
}

