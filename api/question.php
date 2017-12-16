<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
   function AndriodPush($devicetoken, $msg)
    {
        //print_r($devicetoken);
        $url = 'https://fcm.googleapis.com/fcm/send';
        $registrationIDs = array($devicetoken);

        //flag 1 for client
        //flag 2 for trainer

        $key = "AAAA0yBgZCM:APA91bFZUerNGf3iMjWDiZM91eawLmij2os5m3YXAwIOAdAugeXEzreUzgUUcE6hXZqFCoQNnVLcY2IwoywArNpenJTQAryzIutXn4hP54Gb1ZcH59Kc-CUZOYJMtWi6SAKS7WgUrQlJ";
        $message = array('Title' =>'msg', "Body" => $msg,'type'=>"Question");

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
if(isset($input)){
       if(!isset($input->question) || ($input->question == ''))
	   {
	      $error[] = "Question is required.";
	   }
	   if(count($error) > 0 )
	   {
		   $return['success']=0;
		   $return['result'] = $error;
	   }else
	   { 
	        
	          mysqli_query($con,"insert into `question`(`doctor_id`,`question`,`sender_id`,`upload`,`date_time`,`status`) VALUES('".$input->doctor_id ."','".$input->question."','".$input->sender_id ."','','".date("Y-m-d h:i:s")."','0' )");
		   $res =  mysqli_query($con,"SELECT * FROM `user` where id ='".$input->doctor_id."' ");
	       $row =  mysqli_fetch_assoc($res);
		   AndriodPush( $row['device_id'],$input->question);
	       $return['success']=1;
           $return['result'] ="You have successfully send question.";
	   }
		
	
 }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>