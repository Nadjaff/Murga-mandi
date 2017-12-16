<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
 if(isset($input)){
	 $sql = "select * from user where id='".$input->user_id."' and activated = '1' "; 
	 $res =  mysqli_query($con,$sql);
	 $result1 = mysqli_fetch_assoc($res);
	 if( isset($result1['id']))
	 {
	   
		 $return['success']=1; 
		
		 
		 if($result1['image_user_filename'] !='' )
		 {
		   $result1['image_user_filename']=$website_url.'files/thumbnail/'.$result1['image_user_filename'];
		 } 
		 $return['result'] = $result1;
		
		 
	 }else
	 {
	     $return['success']=0;   
		 $return['result'] = array("No records found.");
	 }
	}else{
			$return['success']=0;   
			$return['result'] = "Error in code.";
		
	}
	
 echo json_encode($return);
?>