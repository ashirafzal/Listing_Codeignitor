<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editmyprofile extends CI_Controller {

	public function index()
	{      
		$this->load->library('session');
		
		if($this->session->userdata('user') == ''){
			redirect('login','refresh');
		}else{
			$this->load->view('headerfiles');
			$this->load->view('editmyprofile');
			$this->load->view('footer');

		}
		
	}

}