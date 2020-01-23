<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('headerfiles');
		$this->load->view('login');
		$this->load->view('footer'); 
	}

	public function user_login()
	{
		$this->load->model('Login_Model');
		//Check submit button 
		if($this->input->post('login'))
		{
		//get form's data and store in local varable
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
        //call saverecords method of Hello_Model and pass variables as parameter
		$data['all_data'] = $this->Login_Model->login($username,$password);
		$this->load->library('session');

		$this->session->set_userdata('user', $data);

		if($this->session->userdata('user') == ''){
			redirect('Login','refresh');
		}else{
			$this->load->view('headerfiles');
			$this->load->view('dashboard', $data);
			$this->load->view('footer'); 
			//redirect('Dashboard','refresh');
			//var_dump($data['all_data']);
		}
		
		}
	}
}