<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'user/dashboard/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
