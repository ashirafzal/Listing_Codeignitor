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

		$username = $this->input->post('username');
		$category = $this->input->post('category');
		$password = $this->input->post('password');
		$confpassword = $this->input->post('confirmpassword');
		$email = $this->input->post('email');

		if($username == ''){
			echo json_encode(['error'=>'username required']);
		}
		else if($category == ''){
			echo json_encode(['error'=>'category required']);
		}
		else if($password == ''){
			echo json_encode(['error'=>'password required']);
		}
		else if($confpassword == ''){
			echo json_encode(['error'=>'confirm password required']);
		}
		else if($password != $confpassword){
			echo json_encode(['error'=>'password & confirm password mismatched']);
		}
		else{

			$exists = $this->Register_Model->filename_exists($email);

			$count = count($exists);
			if (empty($count)) {
				
				$this->Register_Model->saverecords($username,$email,$category,$password);		

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
		}
	}
}