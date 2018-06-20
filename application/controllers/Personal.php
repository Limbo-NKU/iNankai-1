<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Personal extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->library('session');
    }
    public function index()
    {
    	$this->load->view('head');
    	$this->load->view('header_reg');
       $this->load->view('personal2');
    }
}
?>