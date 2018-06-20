<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Personal_club extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->library('session');
    }
    public function index()
    {
       $this->load->view('personal_club');
    }
}
?>