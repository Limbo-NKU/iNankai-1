<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Homepage extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->library('session');
    }
    public function index()
    {
    	 $this->load->view('head');
    	 $this->load->view('header');
       $this->load->view('home_page');
       $this->load->view('footer');
    }
}
?>