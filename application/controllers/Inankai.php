<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inankai extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->library('session');
    }
    public function index()
    {
    	$this->load->view('head');
    	$this->load->view('header');
       $this->load->view('INANKAI');
       $this->load->view('footer');
    }
}
?>