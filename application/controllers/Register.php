<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function insert_user(){		

		$this->load->model('Register_Model');

		$email = $this->input->post('email');
		$exists = $this->Register_Model->filename_exists($email);

		$count = count($exists);
		if (empty($count)) {
			$username = $this->input->post('username');
			$category = $this->input->post('category');
			$password = $this->input->post('password');
			$confpassword = $this->input->post('confirmpassword');
			
			$this->Register_Model->saverecords($username,$email,$category,$password);		
			//redirect(base_url().'index.php/Login/index');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|unique');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');
						
			if ($this->form_validation->run() == FALSE){
				$errors = validation_errors();
				echo json_encode(['error'=>$errors]);
			}else{
			
			echo json_encode(['success'=>'User registered successfully.']);
			}
		} else {
			echo json_encode(['error'=>'User already registered on this email.']);
		}

		/*
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
			}else{
				//call saverecords method of Hello_Model and pass variables as parameter
				//$this->Register_Model->saverecords($username,$email,$category,$password);		
				redirect(base_url().'index.php/Login/index');
			}			
		}*/
	}
}