<?php
 include_once('db_con.php'); 
 $input = (object)$_POST;
 $error=array(); 
 $return = array();
 if(isset($input) && isset($input->otp)){
        
        $res =  mysqli_query($con,"SELECT * FROM `user` where phone ='".$input->mobile_no."' and otp_number ='".$input->otp."'");
	    $row =  mysqli_fetch_assoc($res);
	    if(count($row) > 0)
		{
		
		  $res =  mysqli_query($con,"UPDATE `user` set `activated`='1',`phone_verified`='1',`device_id`='".$input->device_id."' where id= ".$row['id']);
		  $return['success']=1;   
		  $return['result'] = "Successfully verified.";
		  if(preg_match("/[a-z]/i", $row['name_surname'])){
				$name_surname = $row['name_surname'];
		  }else{
		        $name_surname = '';
		  }
		  if( $row['image_user_filename'] !='' ){
				$img_use = $website_url.'files/thumbnail/'.$row['image_user_filename'];
		  }else{
		        $img_use = '';
		  }
		   $return['result_data']= array('id'=>$row['id'],'name'=>  $name_surname ,'profil_img'=> $img_use,'proffession'=>$row['profession']);   
		}else{
		  
		    $return['success']=0;   
		    $return['result'] = "Sorry! You have entered incorrect OTP.";
		}
	    
 
 }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>