<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
 
 $enc_key = 'fsdjio@&/%$fsdf657t3';
 if(isset($input) && (isset($input->user_id))){
    $sql = "select * from user where id='".$input->user_id."' and activated = '1' "; 
	$res =  mysqli_query($con,$sql);
	$result1 = mysqli_fetch_assoc($res);
	if( isset($result1['id']))
	{
	  if(!isset($input->old_password) || ($input->old_password == ''))
	 {
		$error[] = "Old Password is required.";
	 }else
	 {
	    $pass_hash = substr(hash('sha512', $input->old_password ), 0, 10);
		$res =  mysqli_query($con,"SELECT * FROM user where password='".$pass_hash."' and id = '".$input->user_id."'");
		$row =  mysqli_fetch_row($res);
		if(count($row) > 0)
		{
		
		}else{
		  $error[] = "Old Password is not correct.";
		}
	 }
		   
      if(!isset($input->password) || ($input->password == ''))
	 {
		$error[] = "Password is required.";
	 }
	  if(!isset($input->password_confirm) || ($input->password_confirm == '') || ($input->password != $input->password_confirm ))
	 {
		$error[] = "Confirm Password is required.";
		$error[] = "Confirm Password and Password should be same.";
	 }
	
	 if(count($error) > 0 )
	 {
	   $return['success']=0;
	   $return['result'] = $error;
	 }else
	 {  
	     $password_hash = substr(hash('sha512', $input->password ), 0, 10);
  
		 $sql1 = "UPDATE `user` SET `password` = '".$password_hash."'  where id='".$input->user_id."'"; 
		 $res1 =  mysqli_query($con,$sql1);		
		 if( isset($result1['id']))
		 {
		   
			 $return['success']=1;   
			 $return['result'] = array("Record is updated");
		 }
      }
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