<?php
    class Dashboard_Model extends CI_Model{
    
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function userdetail()
        {            
            $this->load->database();
            $this->load->library('session');
            $email = $this->session->userdata['user']['email'];
            $query = "select * from users where email = '".$email."' ";
            $query = $this->db->query($query);
            $result = $query->result();
            return array("all_data"=>$result);
        }

    }
?>