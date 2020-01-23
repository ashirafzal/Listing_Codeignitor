<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{		
		$this->load->library('session');

		if($this->session->userdata('user') == ''){
			redirect('login','refresh');
		}else{
			$this->load->view('headerfiles');
			$this->load->view('profile');
			$this->load->view('footer'); 
		}
    }
}