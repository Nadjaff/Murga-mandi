<?php
 include_once('db_con.php');
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
if(isset($input)){
        $sql1 = "Select * from `favorites` where `user_id`  = '".$input->user_id."' and `property_id` = '".$input->property_id."'";
	    $res1 = mysqli_query($con,$sql1);
        $row1 = mysqli_fetch_assoc( $res1);
	     if(count( $row1) == 0 )
		{
		  if($input->removed == 0){
			  $sql="INSERT INTO `favorites`( `date_saved`, `lang_code`, `user_id`, `property_id`, `date_last_informed`) VALUES ('".date('Y-m-d H:i:s')."','en','".$input->user_id ."','".$input->property_id."','".date('Y-m-d H:i:s')."') ";
			  mysqli_query($con,$sql);
			  $return['success']=1;
			  $return['result'] ='You have successfully added property in favourite list';
		  }
		}else{
		   if($input->removed == 1){
		      $sql="Delete FROM `favorites` where `user_id`  = '".$input->user_id."' and `property_id` = '".$input->property_id."'";
			  mysqli_query($con,$sql);
			  $return['success']=0;
              $return['result'] = 'You have successfully removed from favourite list.';
		   }else{
		   $return['success']=0;
           $return['result'] = 'You have already this property in favourite list.';
		   }
		}
		
	
 }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>