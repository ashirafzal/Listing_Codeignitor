<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->library('session');
		$this->load->model('Dashboard_Model');

		if($this->session->userdata('user') == ''){
			echo '<script>window.location.href="login"</script>';
		}else{
			$data= $this->Dashboard_Model->userdetail();
			$this->load->view('dashboard',$data);
		}
		
	}

}