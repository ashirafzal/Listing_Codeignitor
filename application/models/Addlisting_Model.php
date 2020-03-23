<?php
    class Addlisting_Model extends CI_Model{
    
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function addlist($userid,$username,$useremail,
		$usercategory,$userphone,$useraddress,$userstatus,$firstname,
		$lastname,$listname,$listphone,$businessemail,$listaddress,$listingtype,$city,
		$opt1,$opt2,$opt3,$opt4,$opt5,$opt6,$opt7,$opt8,$opt9,$opt10,$opt11,$opt12,$opt13,
		$opt14,$opt15,$opt16,$opt17,$opt18,$opt19,$opt20,$opt21,$opt22,$opt23,$opt24,$opt25,
		$openingtime,$closingtime,$textarea1,$facebook,$googleplus,$twitter,$serviceguarantee,
		$professionalservice,$insurancelimit,$iframecode,$iframecode360,
		$org_name,$org_name2,$org_name3,$org_name4,$org_name5,
		$org_name6,$org_name7,$serviceno1,$org_name8,$serviceno2,
		$org_name9,$serviceno3,$org_name10,$serviceno4,$org_name11,
		$serviceno5,$org_name12,$serviceno6,$org_name13)
        {
            $this->load->database();
            
            $org_name = $org_name['file_name'];
            $org_name2 = $org_name2['file_name'];
            $org_name3 = $org_name3['file_name'];
            $org_name4 = $org_name4['file_name'];
            $org_name5 = $org_name5['file_name'];
            $org_name6 = $org_name6['file_name'];
            $org_name7 = $org_name7['file_name'];
            $org_name8 = $org_name8['file_name'];
            $org_name9 = $org_name9['file_name'];
            $org_name10 = $org_name10['file_name'];
            $org_name11 = $org_name11['file_name'];
            $org_name12 = $org_name12['file_name'];
            $org_name13 = $org_name13['file_name'];
            
            $query = "insert into listingdetails(userid,username,email,category,phone,address,status,
            firstname,lastname,listname,listphone,businessemail,listaddress,listingtype,city,
            opt1,opt2,opt3,opt4,opt5,opt6,opt7,opt8,opt9,opt10,opt11,opt12,opt13,opt14,opt15,
            opt16,opt17,opt18,opt19,opt20,opt21,opt22,opt23,opt24,opt25,openingtime,closingtime,textarea1,
            facebook,googleplus,twitter,serviceguarantee,professionalservice,insurancelimit,
            iframecode,360iframecode,coverimage,galleryimg1,galleryimg2,galleryimg3,galleryimg4,
            galleryimg5,galleryimg6,serviceno1,serviceimg,serviceno2,serviceimg2,serviceno3,
            serviceimg3,serviceno4,serviceimg4,serviceno5,serviceimg5,serviceno6,serviceimg6) 
            values ('$userid','$username','$useremail','$usercategory','$userphone','$useraddress',
            '$userstatus','$firstname','$lastname','$listname','$listphone','$businessemail',
            '$listaddress','$listingtype','$city','$opt1','$opt2','$opt3','$opt4','$opt5','$opt6',
            '$opt7','$opt8','$opt9','$opt10','$opt11','$opt12','$opt13','$opt14','$opt15','$opt16',
            '$opt17','$opt18','$opt19','$opt20','$opt21','$opt22','$opt23','$opt24','$opt25',
            '$openingtime','$closingtime','$textarea1','$facebook','$googleplus','$twitter',
            '$serviceguarantee','$professionalservice','$insurancelimit',
            '$iframecode','$iframecode360','$org_name','$org_name2','$org_name3','$org_name4',
            '$org_name5','$org_name6','$org_name7','$serviceno1','$org_name8','$serviceno2',
            '$org_name9','$serviceno3','$org_name10','$serviceno4','$org_name11','$serviceno5',
            '$org_name12','$serviceno6','$org_name13') ";
            
            return $this->db->query($query);
        }

    }
?>