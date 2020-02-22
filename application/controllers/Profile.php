<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$this->load->model('Dashboard_Model');

		if($this->session->userdata('user') == ''){
			echo '<script>window.location.href="login"</script>';
		}else{
			$data= $this->Dashboard_Model->userdetail();
			$this->load->view('profile',$data);
		}
		
	}
}