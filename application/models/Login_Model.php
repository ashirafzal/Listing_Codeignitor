<?php
    class Login_Model extends CI_Model{
    
        public function __construct(){
            parent::__construct();
            $this->load->database();
            }

        public function login($username,$password){
            $this->load->database();
            $query="select * from users where username='".$username."'
            and password='".$password."' ";
            $query = $this->db->query($query);

            $afftectedRows = $this->db->affected_rows();
            if ($afftectedRows == 1) {
                return $query->result();                
            }else{
                //No user exist handling
            }
        }

    }
?>