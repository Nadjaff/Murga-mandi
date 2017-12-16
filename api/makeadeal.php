<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
 $enc_key = 'fsdjio@&/%$fsdf657t3';
 if(isset($input)){
  function AndriodPush($devicetoken, $msg,$res_data)
    {
      
      //  print_r($devicetoken);
        $url = 'https://fcm.googleapis.com/fcm/send';
        $registrationIDs = array($devicetoken);

        //flag 1 for client
        //flag 2 for trainer

        $key = "AAAA0yBgZCM:APA91bFZUerNGf3iMjWDiZM91eawLmij2os5m3YXAwIOAdAugeXEzreUzgUUcE6hXZqFCoQNnVLcY2IwoywArNpenJTQAryzIutXn4hP54Gb1ZcH59Kc-CUZOYJMtWi6SAKS7WgUrQlJ";
        $message = array('Title' =>'msg', "Body" => $msg,'type'=>"Make a Deal");

        $headers = array(
            'Authorization: key='. $key,
            'Content-Type: application/json'
        );

        $fields = array(
            'registration_ids' => $registrationIDs,
            'data' => $message,
            'property_id'=>$res_data['property_id'],
            'property_image'=>$res_data['property_image'],
            'user_name'=>$res_data['user_name'],
            'user_image'=>$res_data['user_image'],
            'user_first'=>$res_data['user_first'],  
            'user_sec'=>$res_data['user_sec'],
            'status'=>$res_data['status'], 
            'date'=>$res_data['date']
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
if(!isset($input->address) || ($input->address == ''))
 {
    $error[] = "Address is required.";
 }
 if(!isset($input->phone) || ($input->phone == ''))
 {
    $error[] = "Phone No. is required.";
 }
 if(!isset($input->property_id) || ($input->property_id == ''))
 {
    $error[] = "Property is required.";
 }
 if(!isset($input->qty) || ($input->qty == ''))
 {
    $error[] = "Quantity is required.";
 }
  if(!isset($input->avg_rate) || ($input->avg_rate == ''))
 {
    $error[] = "Average Rate is required.";
 }
  if(!isset($input->weight) || ($input->weight == ''))
 {
    $error[] = "Weight is required.";
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
	$msg ="I want to make deal with - ";
	$msg .= "Quantity : ".$input->qty.",";
    $msg .= "Average Rate : ".$input->avg_rate.",";
	$msg .= "Weight : ".$input->weight;
     mysqli_query($con,"insert into 
	 `enquire`(`property_id`,`name_surname`,`phone`,`date`,`mail`,`message`,`readed`,`address`,`agent_id`) VALUES('".$input->property_id ."','".$input->name ."','".$input->phone."','".date("Y-m-d h:i:s") ."','' ,'".$input->message."','30','".$input->address ."','".$row['user_id']."')");
	 
	  mysqli_query($con,"insert into 
	 `chat`(`user_first`,`user_sec`,`message`,`property_id`,`status`,`date`) VALUES('".$input->user_id."','".$row['user_id'] ."','".$msg ."','".$input->property_id  ."','1' ,'".date("Y-m-d h:i:s")."')");
      
	$user_res =  mysqli_query($con,"SELECT * FROM `user` where id='".$input->user_id ."'");
	$row_user =  mysqli_fetch_assoc($user_res);
        $prop_res =  mysqli_query($con,"SELECT * FROM `property` where id='".$input->property_id ."'");
	$row_prop =  mysqli_fetch_assoc($prop_res);
       
        $res_data=array();
        $res_data['property_id']= $input->property_id;
        $res_data['property_image']=$website_url.'files/thumbnail/'.$row_prop['image_filename'];
        $res_data['user_name']= $row_user['username'];
        $res_data['user_image']= $website_url.'files/thumbnail/'.$row_user['image_user_filename'];
        $res_data['user_first']=$input->user_id;
        $res_data['user_sec']=$row['user_id'] ;
        $res_data['status']= 1;
        $res_data['date']=date("Y-m-d h:i:s");
    
	AndriodPush( $row1['device_id'],$msg,$res_data);
	
	$return['success']=1;
    $return['result'] = 'You have successfully added make a deal for property.';
	
 }
  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>