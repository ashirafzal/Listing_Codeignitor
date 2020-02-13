<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login'); 
	}

	public function user_login()
	{
		$this->load->model('Login_Model');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($email == '' && $password == ''){
			echo json_encode(['error'=>'Email or password required']);
		}
		else if($email == ''){
			echo json_encode(['error'=>'Email required']);
		}
		else if($password == ''){
			echo json_encode(['error'=>'password required']);
		}
		else{
				
			$data['all_data'] = $this->Login_Model->login($email,$password);

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE){
				$errors = validation_errors();
				echo json_encode(['error'=>$errors]);
			}else{
				$this->session->set_userdata('user', $data);
				if($this->session->userdata('user') == ''){
					echo json_encode(['error'=>'email or password is incorrect']);
				}else{
					echo json_encode(['success'=>'ticket to dashboard']);
					//$this->load->view('dashboard', $data);
					//redirect(base_url().'index.php/Dashboard/index');
				}
			}				
			
		}
	}
}