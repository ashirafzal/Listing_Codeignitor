<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editmyprofile extends CI_Controller {
	
	public function __construct() {
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->library('session');
		$this->load->model('Dashboard_Model');

		if($this->session->userdata('user') == ''){
			echo '<script>window.location.href="login"</script>';
		}else{
			$data= $this->Dashboard_Model->userdetail();
			$this->load->view('editmyprofile',$data);
		}		
	}

	public function updateprofile()
	{
			$this->load->library('form_validation');
			$this->load->model('Editmyprofile_Model');

			$username = $this->input->post('username');
			$status = $this->input->post('status');
			$password = $this->input->post('password');
			$confpassword = $this->input->post('confirmpassword');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$dob = $this->input->post('dob');
			$org_name = $this->input->post('userimage');

			$this->Editmyprofile_Model->updateprofile($username,$email,$password,$phone,$address,$status,$dob,$org_name);		
				
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('status', 'Status', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');
			$this->form_validation->set_rules('dob', 'Date of birth', 'required');
			$this->form_validation->set_rules('phone', 'phone', 'required');
			$this->form_validation->set_rules('address', 'address', 'required');
			$this->form_validation->set_rules('userimage', 'user image', 'required');

			if ($this->form_validation->run() == FALSE){
				$errors = validation_errors();
				echo json_encode(['error'=>$errors]);
			}else{
				echo json_encode(['success'=>'Profile updated successfully.']);
			}
			
	}

}