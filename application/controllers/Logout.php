<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
        $this->load->library('session');
        $this->session->unset_userdata('user'); 

        if($this->session->userdata('user') == ''){
			echo '<script>window.location.href="login"</script>';
		}else{
			$this->load->view('dashboard', $data);
		}
    }
}