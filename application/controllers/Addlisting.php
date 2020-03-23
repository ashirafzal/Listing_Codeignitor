<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addlisting extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		$this->load->library('session');
		$this->load->model('Dashboard_Model');
		$this->load->model('Addlisting_Model');

		if($this->session->userdata('user') == ''){
			echo '<script>window.location.href="login"</script>';
		}else{
			$data= $this->Dashboard_Model->userdetail();
			$this->load->view('addlisting',$data);
		}	
	}

	public function do_upload()
	{	
		$this->load->library('form_validation');
		$this->load->model('Dashboard_Model');
		$this->load->model('Addlisting_Model');

		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$listname = $this->input->post('listname');
		$listphone = $this->input->post('listphone');
		$businessemail = $this->input->post('email');
		$listaddress = $this->input->post('listaddress');
		$listingtype = $this->input->post('listingtype');
		$city = $this->input->post('city');
		$listingcategory = $this->input->post('category');
		$days = $this->input->post('days');
		$openingtime = $this->input->post('openingtime');
		$closingtime = $this->input->post('closingtime');
		$textarea1 = $this->input->post('textarea1');
		$facebook = $this->input->post('facebook');
		$googleplus = $this->input->post('googleplus');
		$twitter = $this->input->post('twitter');
		$serviceguarantee = $this->input->post('serviceguarantee');
		$professionalservice = $this->input->post('professionalservice');
		$insurancelimit = $this->input->post('insurancelimit');
		$iframecode = $this->input->post('iframecode');
		$iframecode360 = $this->input->post('iframecode360');
		$serviceno1 = $this->input->post('serviceno1');
		$serviceno2 = $this->input->post('serviceno2');
		$serviceno3 = $this->input->post('serviceno3');
		$serviceno4 = $this->input->post('serviceno4');
		$serviceno5 = $this->input->post('serviceno5');
		$serviceno6 = $this->input->post('serviceno6');
		$org_name = $this->input->post('coverimage');
		$org_name2 = $this->input->post('galleryimg1');
		$org_name3 = $this->input->post('galleryimg2');
		$org_name4 = $this->input->post('galleryimg3');
		$org_name5 = $this->input->post('galleryimg4');
		$org_name6 = $this->input->post('galleryimg5');
		$org_name7 = $this->input->post('galleryimg6');
		$org_name8 = $this->input->post('serviceimg');
		$org_name9 = $this->input->post('serviceimg2');
		$org_name10 = $this->input->post('serviceimg3');
		$org_name11 = $this->input->post('serviceimg4');
		$org_name12 = $this->input->post('serviceimg5');
		$org_name13 = $this->input->post('serviceimg6');

		$config = array(
		'upload_path' => "./listingimages/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' => TRUE,
		'max_size' => "5120000", // Can be set to particular file size , here it is 5 MB(5120 Kb)
		'max_height' => "1024",
		'max_width' => "2048"
		);
		$this->load->library('upload', $config);

		if($this->upload->do_upload('coverimage')){
			$org_name = $this->upload->data();
		}else{
			$error = $this->upload->display_errors();
		}

		if($this->upload->do_upload('galleryimg1')){
			$org_name2 = $this->upload->data();
		}else{
			$error2 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('galleryimg2')){
			$org_name3 = $this->upload->data();
		}else{
			$error3 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('galleryimg3')){
			$org_name4 = $this->upload->data();
		}else{
			$error4 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('galleryimg4')){
			$org_name5 = $this->upload->data();
		}else{
			$error5 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('galleryimg5')){
			$org_name6 = $this->upload->data();
		}else{
			$error6 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('galleryimg6')){
			$org_name7 = $this->upload->data();
		}else{
			$error7 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('serviceimg')){
			$org_name8 = $this->upload->data();
		}else{
			$error8 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('serviceimg2')){
			$org_name9 = $this->upload->data();
		}else{
			$error9 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('serviceimg3')){
			$org_name10 = $this->upload->data();
		}else{
			$error10 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('serviceimg4')){
			$org_name11 = $this->upload->data();
		}else{
			$error11 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('serviceimg5')){
			$org_name12 = $this->upload->data();
		}else{
			$error12 = $this->upload->display_errors();
		}

		if($this->upload->do_upload('serviceimg6')){
			$org_name13 = $this->upload->data();
		}else{
			$error13 = $this->upload->display_errors();
		}

		$listingcategory = implode(" ", (array)$listingcategory);	
		$days = implode(" ", (array)$days);
		
		if(strpos($listingcategory, 'Hotels & Resorts') !== FALSE)
		{
			$opt1 = "available";
		}
		else
		{
			$opt1 = "not available";
		}

		if(strpos($listingcategory, 'Real Estate') !== FALSE)
		{
			$opt2 = "available";
		}else
		{
			$opt2 = "not available";
		}

		if(strpos($listingcategory, 'Trainings') !== FALSE)
		{
			$opt3 = "available";
		}else
		{
			$opt3 = "not available";
		}

		if(strpos($listingcategory, 'Education') !== FALSE)
		{
			$opt4 = "available";
		}else
		{
			$opt4 = "not available";
		}

		if(strpos($listingcategory, 'Hospitals') !== FALSE)
		{
			$opt5 = "available";
		}else
		{
			$opt5 = "not available";
		}

		if(strpos($listingcategory, 'Transportation') !== FALSE)
		{
			$opt6 = "available";
		}else
		{
			$opt6 = "not available";
		}

		if(strpos($listingcategory, 'Automobilers') !== FALSE)
		{
			$opt7 = "available";
		}else
		{
			$opt7 = "not available";
		}

		if(strpos($listingcategory, 'Computer Repair') !== FALSE)
		{
			$opt8 = "available";
		}else
		{
			$opt8 = "not available";
		}

		if(strpos($listingcategory, 'Property') !== FALSE)
		{
			$opt9 = "available";
		}else
		{
			$opt9 = "not available";
		}

		if(strpos($listingcategory, 'Food Court') !== FALSE)
		{
			$opt10 = "available";
		}else
		{
			$opt10 = "not available";
		}

		if(strpos($listingcategory, 'Sports Events') !== FALSE)
		{
			$opt11 = "available";
		}else
		{
			$opt11 = "not available";
		}
		if(strpos($listingcategory, 'Tour & Travels') !== FALSE)
		{
			$opt12 = "available";
		}else
		{
			$opt12 = "not available";
		}

		if(strpos($listingcategory, 'Health Care') !== FALSE)
		{
			$opt13 = "available";
		}else
		{
			$opt13 = "not available";
		}

		if(strpos($listingcategory, 'Gym & Fitness') !== FALSE)
		{
			$opt14 = "available";
		}else
		{
			$opt14 = "not available";
		}

		if(strpos($listingcategory, 'Packers and Movers') !== FALSE)
		{
			$opt15 = "available";
		}else
		{
			$opt15 = "not available";
		}

		if(strpos($listingcategory, 'Interior Design') !== FALSE)
		{
			$opt16 = "available";
		}else
		{
			$opt16 = "not available";
		}

		if(strpos($listingcategory, 'Clubs') !== FALSE)
		{
			$opt17 = "available";
		}else
		{
			$opt17 = "not available";
		}

		if(strpos($listingcategory, 'Mobile Shops') !== FALSE)
		{
			$opt18 = "available";
		}
		else
		{
			$opt18 = "not available";
		}

		if(strpos($days, 'Monday') !== FALSE)
		{
			$opt19 = "available";
		}
		else
		{
			$opt19 = "not available";
		}

		if(strpos($days, 'Tuesday') !== FALSE)
		{
			$opt20 = "available";
		}
		else
		{
			$opt20 = "not available";
		}

		if(strpos($days, 'Wednesday') !== FALSE)
		{
			$opt21 = "available";
		}
		else
		{
			$opt21 = "not available";
		}

		if(strpos($days, 'Thursday') !== FALSE)
		{
			$opt22 = "available";
		}
		else
		{
			$opt22 = "not available";
		}

		if(strpos($days, 'Friday') !== FALSE)
		{
			$opt23 = "available";
		}
		else
		{
			$opt23 = "not available";
		}

		if(strpos($days, 'Saturday') !== FALSE)
		{
			$opt24 = "available";
		}
		else
		{
			$opt24 = "not available";
		}

		if(strpos($days, 'Sunday') !== FALSE)
		{
			$opt25 = "available";
		}
		else
		{
			$opt25 = "not available";
		}

		$data= $this->Dashboard_Model->userdetail();

		foreach ($data['all_data'] as $user) 
		{ 
			$userid = $user->id;
			$username = $user->username;
			$useremail = $user->email;
			$usercategory = $user->category; 
			$userphone = $user->phone; 
			$useraddress = $user->address;
			$userstatus = $user->status;  
		}
		
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('listname', 'List Name', 'required');
		$this->form_validation->set_rules('listphone', 'List Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('listaddress', 'List Address', 'required');
		$this->form_validation->set_rules('listingtype', 'Listing Type', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('category', 'Category', '');
		$this->form_validation->set_rules('days', 'Days', '');
		$this->form_validation->set_rules('openingtime', 'Opening Time', 'required');
		$this->form_validation->set_rules('closingtime', 'Closing Time', 'required');
		$this->form_validation->set_rules('textarea1', 'Text Area', 'required');
		$this->form_validation->set_rules('facebook', 'Facebook', 'required');
		$this->form_validation->set_rules('googleplus', 'Google Plus', 'required');
		$this->form_validation->set_rules('twitter', 'Twitter', 'required');
		$this->form_validation->set_rules('serviceguarantee', 'Service Guarantee', 'required');
		$this->form_validation->set_rules('professionalservice', 'Professional Service', 'required');
		$this->form_validation->set_rules('insurancelimit', 'Insurance Limit', 'required');
		$this->form_validation->set_rules('iframecode', 'iframecode', 'required');
		$this->form_validation->set_rules('iframecode360', '360 iframecode', 'required');
		$this->form_validation->set_rules('serviceno1', 'service No 1', 'required');
		$this->form_validation->set_rules('serviceno2', 'service No 2', 'required');
		$this->form_validation->set_rules('serviceno3', 'service No 3', 'required');
		$this->form_validation->set_rules('serviceno4', 'service No 4', 'required');
		$this->form_validation->set_rules('serviceno5', 'service No 5', 'required');
		$this->form_validation->set_rules('serviceno6', 'service No 6', 'required');

		if ($this->form_validation->run() == FALSE){
			$errors = validation_errors();
			$data= $this->Dashboard_Model->userdetail();
			$this->load->library('session'); 
         	$this->load->helper('url'); 
			$this->session->flashdata('error');
			$this->session->set_flashdata('error',$errors); 
			$this->load->view('addlisting',$data);
		}else{
			$this->Addlisting_Model->addlist($userid,$username,$useremail,
			$usercategory,$userphone,$useraddress,$userstatus,$firstname,
			$lastname,$listname,$listphone,$businessemail,$listaddress,$listingtype,$city,
			$opt1,$opt2,$opt3,$opt4,$opt5,$opt6,$opt7,$opt8,$opt9,$opt10,$opt11,$opt12,$opt13,
			$opt14,$opt15,$opt16,$opt17,$opt18,$opt19,$opt20,$opt21,$opt22,$opt23,$opt24,$opt25,
			$openingtime,$closingtime,$textarea1,$facebook,$googleplus,$twitter,$serviceguarantee,
			$professionalservice,$insurancelimit,$iframecode,$iframecode360,
			$org_name,$org_name2,$org_name3,$org_name4,$org_name5,
			$org_name6,$org_name7,$serviceno1,$org_name8,$serviceno2,
			$org_name9,$serviceno3,$org_name10,$serviceno4,$org_name11,
			$serviceno5,$org_name12,$serviceno6,$org_name13);

			$data= $this->Dashboard_Model->userdetail();
			$this->load->library('session'); 
         	$this->load->helper('url'); 
			$this->session->flashdata('listingsuccess');
			$this->session->set_flashdata('listingsuccess','List Created successfully.'); 
			$this->load->view('addlisting',$data);
		}
	}
}