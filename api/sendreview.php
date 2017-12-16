<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
 
 if(isset($input) && (isset($input->user_id))){
       if(!isset($input->listing_id) || ($input->listing_id == ''))
	   {
	       $error[] = "Listing ID is required.";
	   }
	   if(!isset($input->rating) || ($input->rating == ''))
	   {
	       $error[] = "Rating is required.";
	   }
	   if(!isset($input->message) || ($input->message == ''))
	   {
	       $error[] = "Message is required.";
	   }
	   
	   
	   if(count($error) > 0 )
	 {
	   $return['success']=0;
	   $return['result'] = $error;
	 }else
	 { 
	    
		 mysqli_query($con,"insert into `reviews`(`listing_id`,`user_id`,`stars`,`message`,`is_visible`,`date_publish`) VALUES('".$input->listing_id ."','".$input->user_id ."','".$input->rating ."','".$input->message ."','1' ,'".date("Y-m-d h:i:s")."')");		
		$return['success']=1;
		$return['result'] = 'You have successfully send reviews.';
		
	 }
	}else{
			$return['success']=0;   
			$return['result'] = "Error in code.";
		
	}
	
 echo json_encode($return);
?>