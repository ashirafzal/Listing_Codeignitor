<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
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
		$this->Login_Model->login($username,$password);
		}
	}
}