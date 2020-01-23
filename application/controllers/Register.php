<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('headerfiles');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function insert_user(){		

		$this->load->model('Register_Model');
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$category = $this->input->post('category');
		$password = $this->input->post('password');
		$confpassword = $this->input->post('confirmpassword');
		
		
			if($password != $confpassword){
				$data['pass'] = "notpass";
				$this->load->view('register',$data);
				$this->load->view('footer');
			}else{
				//call saverecords method of Hello_Model and pass variables as parameter
				$this->Register_Model->saverecords($username,$email,$category,$password);		
				redirect('Login','refresh'); 
			}

		}
	}
}