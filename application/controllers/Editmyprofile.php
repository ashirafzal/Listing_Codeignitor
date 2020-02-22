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

	public function do_upload()
	{
		$config['upload_path']          = './userimages/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image'))
		{
			echo json_encode(['error'=>'image required']);
		}
		else
		{
			
		}
	}

	public function updateprofile()
	{
		$this->load->model('Editmyprofile_Model');

			$username = $this->input->post('username');
			$status = $this->input->post('status');
			$password = $this->input->post('password');
			$confpassword = $this->input->post('confirmpassword');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$dob = $this->input->post('dob');
			$image = $this->input->post('image');
			
			if($username == ''){
				echo json_encode(['error'=>'username required']);
			}
			else if($status == ''){
				echo json_encode(['error'=>'status required']);
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
			else if($dob == ''){
				echo json_encode(['error'=>'date of birth required']);
			}
			else if($phone == ''){
				echo json_encode(['error'=>'phone required']);
			}
			else if($address == ''){
				echo json_encode(['error'=>'address required']);
			}
			else if($image == ''){
				echo json_encode(['error'=>'image required']);
			}
			else
			{
				$this->Editmyprofile_Model->updateprofile($username,$email,$password,$phone,$address,$status,$dob,$image);		
				
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('status', 'Status', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');
				$this->form_validation->set_rules('dob', 'Date of birth', 'required');
				$this->form_validation->set_rules('phone', 'phone', 'required');
				$this->form_validation->set_rules('address', 'address', 'required');
				$this->form_validation->set_rules('image', 'image', 'required');

				if ($this->form_validation->run() == FALSE){
					$errors = validation_errors();
					echo json_encode(['error'=>$errors]);
				}else{
					echo json_encode(['success'=>'Profile updated successfully.']);
				}
			}
	}

}