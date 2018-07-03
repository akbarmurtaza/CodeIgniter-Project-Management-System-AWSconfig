<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function  __construct() {
	      parent::__construct();
	      $this->load->database();
	      $this->load->helper('url');
				$this->load->library('session');
	  }

		public function index()
		{
			$this->load->helper(array('form', 'url'));
			$this->load->helper('form');
			$this->load->library('form_validation');
		$this->load->view('pages/Login.php');
	}
}
