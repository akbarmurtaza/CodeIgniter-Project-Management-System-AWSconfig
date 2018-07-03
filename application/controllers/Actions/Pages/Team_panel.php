<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_panel extends CI_Controller {

	public function index()
	{
$this->load->helper('url');
$this->load->library('session');

			if(isset($this->session->userdata['logged_in'])){

			$this->load->view('pages/actions/Team_panel.php');
		}

			else{
				header("location: Admin_Login");
			}
		}
	}
?>
