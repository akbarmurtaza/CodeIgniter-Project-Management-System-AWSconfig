<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_index extends CI_Controller {

	function  __construct() {
	      parent::__construct();
	      $this->load->database();
	      $this->load->helper('url');
	  }

	public function index()
	{
$this->load->helper('url');
$this->load->library('session');

			if(isset($this->session->userdata['logged_in'])){
				$this->load->model("functions/TeamDb");
		$this->db->select('team.team_id as id,team.lead_id as leadid,team.mem_id1 as mem1,team.mem_id2 as mem2,team.mem_id3 as mem3,team.mem_id4 as mem4,team.mem_id5 as mem5,team.mem_id6 as mem6,team.mem_id7 as mem7,team.mem_id8 as mem8,team.project_id as projectid,team.remarks as remarks,team.priority as priority');
		$this->db->from('team');
		$this->db->order_by('team.team_id');
		$data['team'] = $this->db->get()->result_array();

		$this->load->model("functions/ProjectDb");
		$this->db->select('project.title as title,project.id as id,project.start_date as sdate,project.deadline as deadline,project.Remarks as remarks,project.priority as priority');
		$this->db->from('project');
		$this->db->order_by('project.start_date');
		$data['project'] = $this->db->get()->result_array();

			$this->load->view('pages/actions/Team_index.php',$data);
		}

			else{
				header("location: Admin_Login");
			}
		}
	}
?>
