<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_team extends CI_Controller {

	public function index()
	{
$this->load->helper('url');
$this->load->library('session');

			if(isset($this->session->userdata['logged_in'])){

			$this->load->view('pages/actions/Add_team.php');
		}

			else{
				header("location: Admin_Login");
			}
		}
	}
?>
