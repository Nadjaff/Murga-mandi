<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();  
  if(isset($input)){
      $res1 =  mysqli_query($con,"select * from user where id='".$input->user_id."'");
	  $row1 =  mysqli_fetch_assoc($res1);
      $res2 =  mysqli_query($con,"select * from settings where id='7504'");
	  $row2 =  mysqli_fetch_assoc($res2);
	  $msg  =  "<img src ='".$website_url."admin-assets/img/stamp.png' />" ;
	  $msg  .=  "<p><b>Name:</b>".$row1['name_surname']."</p>";
	  $msg  .=  "<p><b>email:</b>".$row1['mail']."</p>";
	  $msg  .=  "<p><b>phone:</b>".$row1['phone']."</p>";
	  $msg  .=  "<p><b>message:</b>".$input->message."</p>";
	  $headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// More headers
		$headers .= 'From: <'.$row1["mail"].'>' . "\r\n";
		
	  mail($row2['value'],"Message from murga-mandi",$msg,$headers);
	  
	$return['success']=1;
    $return['result'] = 'Message sent successfully, we will contact you as soon as possible.';
	

  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>