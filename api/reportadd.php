<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
 $enc_key = 'fsdjio@&/%$fsdf657t3';
 if(isset($input)){
  function AndriodPush($devicetoken, $msg)
    {
      //  print_r($devicetoken);
        $url = 'https://fcm.googleapis.com/fcm/send';
        $registrationIDs = array($devicetoken);

        //flag 1 for client
        //flag 2 for trainer

        $key = "AAAA0yBgZCM:APA91bFZUerNGf3iMjWDiZM91eawLmij2os5m3YXAwIOAdAugeXEzreUzgUUcE6hXZqFCoQNnVLcY2IwoywArNpenJTQAryzIutXn4hP54Gb1ZcH59Kc-CUZOYJMtWi6SAKS7WgUrQlJ";
        $message = array('Title' =>'msg', "Body" => $msg,'type'=>"Report");

        $headers = array(
            'Authorization: key='. $key,
            'Content-Type: application/json'
        );

        $fields = array(
            'registration_ids' => $registrationIDs,
            'data' => $message,
        );
//print_r($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);


//        echo $result;die;
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }
        curl_close($ch);
        return $result;


    }
 if(!isset($input->name) || ($input->name == ''))
 {
    $error[] = "Name is required.";
 }
   
 
  if(!isset($input->mail) || ($input->mail == ''))
 {
    $error[] = "Mail is required.";
 }
 if(!isset($input->phone) || ($input->phone == ''))
 {
    $error[] = "Phone No. is required.";
 }
 if(!isset($input->property_id) || ($input->property_id == ''))
 {
    $error[] = "Property is required.";
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
 
    $res =  mysqli_query($con,"SELECT * FROM  `property_user` where `property_id`='".$input->property_id ."'");
	
	//echo "SELECT * FROM  `property_user` where `property_id`='".$input->property_id ."'";
	$row =  mysqli_fetch_assoc($res);
    
	$res1 =  mysqli_query($con,"SELECT * FROM `user` where id='".$row['user_id'] ."'");
	$row1 =  mysqli_fetch_assoc($res1);

     mysqli_query($con,"insert into 
	 `reports`(`property_id`,`name`,`phone`,`date_submit`,`email`,`message`,`agent_id`) VALUES('".$input->property_id ."','".$input->name ."','".$input->phone."','".date("Y-m-d h:i:s") ."','".$input->mail ."' ,'".$input->message."','".$row['user_id']."')");
	AndriodPush( $row['device_id'],$input->message);
	
	$return['success']=1;
    $return['result'] = 'You have successfully report for property.';
	
 }
  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>