<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intern_index extends CI_Controller {

	public function index()
	{
$this->load->helper('url');
$this->load->library('session');

			if(isset($this->session->userdata['logged_in'])){

			$this->load->view('pages/actions/Intern_index.php');
		}

			else{
				header("location: Admin_Login");
			}
		}
	}
?>
