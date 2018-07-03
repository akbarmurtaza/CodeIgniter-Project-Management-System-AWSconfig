<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	function  __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
			$this->load->library('session');
  }

	public function index()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
     redirect('Admin_Login', 'index');
	}
}
