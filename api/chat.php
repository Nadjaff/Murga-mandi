<?php
 include_once('db_con.php'); 
 $input = (object)$_POST;
 $error=array();
 $return = array();
function AndriodPush($devicetoken, $msg,$res_data)
    {
      //  print_r($devicetoken);
        $url = 'https://fcm.googleapis.com/fcm/send';
        $registrationIDs = array($devicetoken);

        //flag 1 for client
        //flag 2 for trainer

        $key = "AAAA0yBgZCM:APA91bFZUerNGf3iMjWDiZM91eawLmij2os5m3YXAwIOAdAugeXEzreUzgUUcE6hXZqFCoQNnVLcY2IwoywArNpenJTQAryzIutXn4hP54Gb1ZcH59Kc-CUZOYJMtWi6SAKS7WgUrQlJ";
        $msg = array( 'property_id'=>$res_data['property_id'],
            'property_image'=>$res_data['property_image'],
            'user_name'=>$res_data['user_name'],
            'user_image'=>$res_data['user_image'],
            'user_first'=>$res_data['user_first'],  
            'user_sec'=>$res_data['user_sec'],
            'status'=>$res_data['status'], 
            'date'=>$res_data['date']);
        $message = array('Title' =>'msg', "Body" => $msg,'type'=>"Chat");

        $headers = array(
            'Authorization: key='. $key,
            'Content-Type: application/json'
        );

        $fields = array(
            'registration_ids' => $registrationIDs,
            'data' => $message
         
        );
     //   print_r( $fields);
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
 if(isset($input) ){
 
	    mysqli_query($con,"insert into `chat`(`user_first`,`user_sec`,`message`,`status`,`property_id`,`date`) values ('".$input->user_first."','".$input->user_sec."','".$input->msg."','1','".$input->property_id."','".date("Y-m-d H:i:s")."')");
           $res1 =  mysqli_query($con,"SELECT * FROM `user` where id='".$input->user_sec."'");
	$row1 =  mysqli_fetch_assoc($res1);

        $user_res =  mysqli_query($con,"SELECT * FROM `user` where id='".$input->user_first ."'");
	$row_user =  mysqli_fetch_assoc($user_res);
        $prop_res =  mysqli_query($con,"SELECT * FROM `property` where id='".$input->property_id ."'");
	$row_prop =  mysqli_fetch_assoc($prop_res);
       
        $res_data=array();
        $res_data['property_id']= $input->property_id;
        $res_data['property_image']=$website_url.'files/thumbnail/'.$row_prop['image_filename'];
        $res_data['user_name']= $row_user['username'];
        $res_data['user_image']= $website_url.'files/thumbnail/'.$row_user['image_user_filename'];
        $res_data['user_first']=$input->user_first;
        $res_data['user_sec']=$input->user_sec ;
        $res_data['status']= 1;
        $res_data['date']=date("Y-m-d h:i:s");
      AndriodPush( $row1['device_id'],$msg,$res_data);
	    $return['success']=1;   
		$return['message'] = "You have successfully send message.";
		
 
  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>