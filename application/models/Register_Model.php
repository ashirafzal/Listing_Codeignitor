<?php
    class Register_Model extends CI_Model{

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function filename_exists($email)
        {
            $this->db->select('*'); 
            $this->db->from('users');
            $this->db->where('email', $email);
            $query = $this->db->get();
            $result = $query->result_array();
            return $result;
        }

        public function saverecords($username,$email,$category,$password)
        {
            $this->load->database();
            $query="insert into users(username,email,category,password) values ('$username','$email','$category','$password')";
            return $this->db->query($query);
        }

    }
?>