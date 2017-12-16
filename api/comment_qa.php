<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
if(isset($input)){
       if(!isset($input->comment) || ($input->comment == ''))
	   {
	      $error[] = "Comment is required.";
	   }
	   if(count($error) > 0 )
	   {
		   $return['success']=0;
		   $return['result'] = $error;
	   }else
	   { 
	          mysqli_query($con,"insert into `comment_qna`(`doctor_id`,`question_id`,`answer_id`,`comment`,`created_at`,`cmnt_user`) VALUES('".$input->doctor_id ."','".$input->question_id."','".$input->answer_id."','".$input->comment."','".date("Y-m-d h:i:s")."','".$input->user."' )");
	       $return['success']=1;
           $return['result'] =array("You have successfully send comments.");
	   }
		
	
 }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>