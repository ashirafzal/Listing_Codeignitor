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

	public function do_upload(){

		$this->load->helper(array('form', 'url'));

		if (isset($_FILES['coverimage'])){
			$tmp_name = $_FILES['coverimage']['tmp_name'];
			$org_name = $_FILES['coverimage']['name'];

			move_uploaded_file($tmp_name, "./listingimages/".$org_name);

		}else{
			echo json_encode(['error'=>'Cover image required']);
		}

		if (isset($_FILES['galleryimg1'])){
			$tmp_name2 = $_FILES['galleryimg1']['tmp_name'];
			$org_name2 = $_FILES['galleryimg1']['name'];

			move_uploaded_file($tmp_name2, "./listingimages/".$org_name2);

		}else{
			echo json_encode(['error'=>'Gallery image 1 required']);
		}

		if (isset($_FILES['galleryimg2'])){
			$tmp_name3 = $_FILES['galleryimg2']['tmp_name'];
			$org_name3 = $_FILES['galleryimg2']['name'];

			move_uploaded_file($tmp_name3, "./listingimages/".$org_name3);

		}else{
			echo json_encode(['error'=>'Gallery image 2 required']);
		}

		if (isset($_FILES['galleryimg3'])){
			$tmp_name4 = $_FILES['galleryimg3']['tmp_name'];
			$org_name4 = $_FILES['galleryimg3']['name'];

			move_uploaded_file($tmp_name4, "./listingimages/".$org_name4);

		}else{
			echo json_encode(['error'=>'Gallery image 3 required']);
		}

		if (isset($_FILES['galleryimg4'])){
			$tmp_name5 = $_FILES['galleryimg4']['tmp_name'];
			$org_name5 = $_FILES['galleryimg4']['name'];

			move_uploaded_file($tmp_name5, "./listingimages/".$org_name5);

		}else{
			echo json_encode(['error'=>'Gallery image 4 required']);
		}

		if (isset($_FILES['galleryimg5'])){
			$tmp_name6 = $_FILES['galleryimg5']['tmp_name'];
			$org_name6 = $_FILES['galleryimg5']['name'];

			move_uploaded_file($tmp_name6, "./listingimages/".$org_name6);

		}else{
			echo json_encode(['error'=>'Gallery image 5 required']);
		}

		if (isset($_FILES['galleryimg6'])){
			$tmp_name7 = $_FILES['galleryimg6']['tmp_name'];
			$org_name7 = $_FILES['galleryimg6']['name'];

			move_uploaded_file($tmp_name7, "./listingimages/".$org_name7);

		}else{
			echo json_encode(['error'=>'Gallery image 6 required']);
		}

		if (isset($_FILES['serviceimg'])){
			$tmp_name8 = $_FILES['serviceimg']['tmp_name'];
			$org_name8 = $_FILES['serviceimg']['name'];

			move_uploaded_file($tmp_name8, "./listingimages/".$org_name8);

		}else{
			echo json_encode(['error'=>'Service image 1 required']);
		}

		if (isset($_FILES['serviceimg2'])){
			$tmp_name9 = $_FILES['serviceimg2']['tmp_name'];
			$org_name9 = $_FILES['serviceimg2']['name'];

			move_uploaded_file($tmp_name9, "./listingimages/".$org_name9);

		}else{
			echo json_encode(['error'=>'Service image 2 required']);
		}

		if (isset($_FILES['serviceimg3'])){
			$tmp_name10 = $_FILES['serviceimg3']['tmp_name'];
			$org_name10 = $_FILES['serviceimg3']['name'];

			move_uploaded_file($tmp_name10, "./listingimages/".$org_name10);

		}else{
			echo json_encode(['error'=>'Service image 3 required']);
		}
		
		if (isset($_FILES['serviceimg4'])){
			$tmp_name11 = $_FILES['serviceimg4']['tmp_name'];
			$org_name11 = $_FILES['serviceimg4']['name'];

			move_uploaded_file($tmp_name11, "./listingimages/".$org_name11);

		}else{
			echo json_encode(['error'=>'Service image 4 required']);
		}

		if (isset($_FILES['serviceimg5'])){
			$tmp_name12 = $_FILES['serviceimg5']['tmp_name'];
			$org_name12 = $_FILES['serviceimg5']['name'];

			move_uploaded_file($tmp_name12, "./listingimages/".$org_name12);

		}else{
			echo json_encode(['error'=>'Service image 5 required']);
		}

		if (isset($_FILES['serviceimg6'])){
			$tmp_name13 = $_FILES['serviceimg6']['tmp_name'];
			$org_name13 = $_FILES['serviceimg6']['name'];

			move_uploaded_file($tmp_name13, "./listingimages/".$org_name13);

		}else{
			echo json_encode(['error'=>'Service image 6 required']);
		}

		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$listname = $this->input->post('listname');
		$listphone = $this->input->post('listphone');
		$businessemail = $this->input->post('email');
		$listaddress = $this->input->post('listaddress');
		$listingtype = $this->input->post('listingtype');
		$city = $this->input->post('city');
		$category = $this->input->post('category');
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
		$iframecode360 = $this->input->post('360iframecode');
		$serviceno1 = $this->input->post('serviceno1');
		$serviceno2 = $this->input->post('serviceno2');
		$serviceno3 = $this->input->post('serviceno3');
		$serviceno4 = $this->input->post('serviceno4');
		$serviceno5 = $this->input->post('serviceno5');
		$serviceno6 = $this->input->post('serviceno6');

		if(strpos($category, "Hotel & Resorts") !== false){
			$op1 = "available";
		}else{
			$op1 = "not available";
		}
		if(strpos($category, "Real Estate") !== false){
			$op2 = "available";
		}else{
			$op2 = "not available";
		}
		if(strpos($category, "Trainings") !== false){
			$op3 = "available";
		}else{
			$op3 = "not available";
		}
		if(strpos($category, "Education") !== false){
			$op4 = "available";
		}else{
			$op4 = "not available";
		}
		if(strpos($category, "Hospitals") !== false){
			$op5 = "available";
		}else{
			$op5 = "not available";
		}
		if(strpos($category, "Transportation") !== false){
			$op6 = "available";
		}else{
			$op6 = "not available";
		}
		if(strpos($category, "Automobilers") !== false){
			$op7 = "available";
		}else{
			$op7 = "not available";
		}
		if(strpos($category, "Computer Repair") !== false){
			$op8 = "available";
		}else{
			$op8 = "not available";
		}
		if(strpos($category, "Property") !== false){
			$op9 = "available";
		}else{
			$op9 = "not available";
		}
		if(strpos($category, "Food Court") !== false){
			$op10 = "available";
		}else{
			$op10 = "not available";
		}
		if(strpos($category, "Sport Events") !== false){
			$op11 = "available";
		}else{
			$op11 = "not available";
		}
		if(strpos($category, "Tour & Travels") !== false){
			$op12 = "available";
		}else{
			$op12 = "not available";
		}
		if(strpos($category, "Health Care") !== false){
			$op13 = "available";
		}else{
			$op13 = "not available";
		}
		if(strpos($category, "Gym & Fitness") !== false){
			$op14 = "available";
		}else{
			$op14 = "not available";
		}
		if(strpos($category, "Packers and Movers") !== false){
			$op15 = "available";
		}else{
			$op15 = "not available";
		}
		if(strpos($category, "Interior Design") !== false){
			$op16 = "available";
		}else{
			$op16 = "not available";
		}
		if(strpos($category, "Clubs") !== false){
			$op17 = "available";
		}else{
			$op17 = "not available";
		}
		if(strpos($category, "Mobile Shops") !== false){
			$op18 = "available";
		}else{
			$op18 = "not available";
		}

		$this->load->model('Dashboard_Model');
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
		
		$this->load->model('Addlisting_Model');
		$this->Addlisting_Model->addlist($userid,$username,$useremail,
		$usercategory,$userphone,$useraddress,$userstatus,$firstname,
		$lastname,$listname,$listphone,$businessemail,$listaddress,$listingtype,
		$city,$op1,$op2,$op3,$op4,$op5,$op6,$op7,$op8,$op9,$op10,$op11,
		$op12,$op13,$op14,$op15,$op16,$op17,$op18,$days,$openingtime,$closingtime,
		$textarea1,$facebook,$googleplus,$twitter,$serviceguarantee,
		$professionalservice,$insurancelimit,$iframecode,$iframecode360,
		$org_name,$org_name2,$org_name3,$org_name4,$org_name5,
		$org_name6,$org_name7,$serviceno1,$org_name8,$serviceno2,
		$org_name9,$serviceno3,$org_name10,$serviceno4,$org_name11,
		$serviceno5,$org_name12,$serviceno6,$org_name13);
		

		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('listname', 'List Name', 'required');
		$this->form_validation->set_rules('listphone', 'List Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('listaddress', 'List Address', 'required');
		$this->form_validation->set_rules('listingtype', 'Listing Type', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('days', 'Days', 'required');
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
		$this->form_validation->set_rules('coverimage', 'Cover Image', 'required');
		$this->form_validation->set_rules('galleryimg1', 'Gallery image 1', 'required');
		$this->form_validation->set_rules('galleryimg2', 'Gallery image 2', 'required');
		$this->form_validation->set_rules('galleryimg3', 'Gallery image 3', 'required');
		$this->form_validation->set_rules('galleryimg4', 'Gallery image 4', 'required');
		$this->form_validation->set_rules('galleryimg5', 'Gallery image 5', 'required');
		$this->form_validation->set_rules('galleryimg6', 'Gallery image 6', 'required');
		$this->form_validation->set_rules('serviceno1', 'service No 1', 'required');
		$this->form_validation->set_rules('serviceimg', 'Service Image 1', 'required');
		$this->form_validation->set_rules('serviceno2', 'service No 2', 'required');
		$this->form_validation->set_rules('serviceimg2', 'Service Image 2', 'required');
		$this->form_validation->set_rules('serviceno3', 'service No 3', 'required');
		$this->form_validation->set_rules('serviceimg3', 'Service Image 3', 'required');
		$this->form_validation->set_rules('serviceno4', 'service No 4', 'required');
		$this->form_validation->set_rules('serviceimg4', 'Service Image 4', 'required');
		$this->form_validation->set_rules('serviceno5', 'service No 5', 'required');
		$this->form_validation->set_rules('serviceimg5', 'Service Image 5', 'required');
		$this->form_validation->set_rules('serviceno6', 'service No 6', 'required');
		$this->form_validation->set_rules('serviceimg6', 'Service Image 6', 'required');

		if ($this->form_validation->run() == FALSE){
			$errors = validation_errors();
			echo json_encode(['error'=>$errors]);
		}else{
			echo json_encode(['success'=>'List Created successfully.']);
		}
	}
}