<?php
 include_once('db_con.php'); 
 $input = (object)$_POST;
 $error=array();
 $return = array();
 if(isset($input) ){
 //file upload  
       $res= mysqli_query($con,"SELECT * FROM `user_feedback`  where `user_id` = '".$input->user_id."'");
	   $result =  mysqli_fetch_assoc($res);
	   if(count($result) == 0)
       {
	    mysqli_query($con,"insert into `user_feedback`(`user_id`,`rating`,`created_at`) values ('".$input->user_id."','".$input->rating."','".date("Y-m-d H:i:s")."')");
	    $return['success']=1;   
		$return['message'] = "You have successfully added review.";
		}else{
	
	    $return['success']=0;   
		$return['message'] = "Sorry ! You have already added review.";
		}
 
  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>