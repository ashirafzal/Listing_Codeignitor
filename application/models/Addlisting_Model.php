<?php
    class Addlisting_Model extends CI_Model{
    
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function addlist($userid,$username,$useremail,
		$usercategory,$userphone,$useraddress,$userstatus,$firstname,
		$lastname,$listname,$listphone,$businessemail,$listaddress,$listingtype,
		$city,$op1,$op2,$op3,$op4,$op5,$op6,$op7,$op8,$op9,$op10,$op11,
		$op12,$op13,$op14,$op15,$op16,$op17,$op18,$days,$openingtime,$closingtime,
		$textarea1,$facebook,$googleplus,$twitter,$serviceguarantee,
		$professionalservice,$insurancelimit,$iframecode,$iframecode360,
		$org_name,$org_name2,$org_name3,$org_name4,$org_name5,
		$org_name6,$org_name7,$serviceno1,$org_name8,$serviceno2,
		$org_name9,$serviceno3,$org_name10,$serviceno4,$org_name11,
		$serviceno5,$org_name12,$serviceno6,$org_name13)
        {
            $this->load->database();
            $query = "insert into listing(userid,username,email,category,phone,address,status,
            firstname,lastname,listname,listphone,businessemail,listaddress,listingtype,city,
            hotelandresorts,realestate,training,education,hospital,transportation,automobilers,
            computerrepair,property,foodcourt,sportevent,tourandtravel,healthcare,gymandfitness,
            packersandmovers,interiordesign,clubs,mobileshops,days,openingtime,closingtime,textarea1,
            facebook,googleplus,twitter,serviceguarantee,professionalservice,insurancelimit,
            iframecode,360iframecode,coverimage,galleryimg1,galleryimg2,galleryimg3,galleryimg4,
            galleryimg5,galleryimg6,serviceno1,serviceimg,serviceno2,serviceimg2,serviceno3,
            serviceimg3,serviceno4,serviceimg4,serviceno5,serviceimg5,serviceno6,serviceimg6) 
            values ('$userid','$username','$useremail','$usercategory','$userphone','$useraddress',
            '$userstatus','$firstname','$lastname','$listname','$listphone','$businessemail',
            '$listaddress','$listingtype','$city','$op1','$op2','$op3',
            '$op4','$op5','$op6','$op7','$op8','$op9',
            '$op10','$op11','$op12','$op13','$op14','$op15',
            '$op16','$op17','$op18','$days','$openingtime','$closingtime','$textarea1',
            '$facebook','$googleplus','$twitter','$serviceguarantee','$professionalservice','$insurancelimit',
            '$iframecode','$iframecode360','$org_name','$org_name2','$org_name3','$org_name4',
            '$org_name5','$org_name6','$org_name7','$serviceno1','$org_name8','$serviceno2',
            '$org_name9','$serviceno3','$org_name10','$serviceno4','$org_name11','$serviceno5',
            '$org_name12','$serviceno6','$org_name13') ";
            return $this->db->query($query);
        }

    }
?>