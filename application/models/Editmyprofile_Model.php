<?php
    class Editmyprofile_Model extends CI_Model{

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function updateprofile($username,$email,$password,$phone,$address,$status,$dob,$org_name)
        {
            $this->load->database();
            $query = "update users set username = '".$username."',email='".$email."',password = '".$password."',phone = '".$phone."',dob = '".$dob."',address='".$address."',status = '".$status."',image = '".$org_name."' where email = '".$email."' ";
            return $this->db->query($query);
        }

    }
?>