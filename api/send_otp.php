<?php
 include_once('db_con.php'); 
 $input = (object)$_POST;
 $error=array();
 $enc_key = 'fsdjio@&/%$fsdf657t3';
 $return = array();
 if(isset($input) && isset($input->mobile_no)){
        $res =  mysqli_query($con,"SELECT * FROM user where phone='".$input->mobile_no."'");
	    $row =  mysqli_fetch_assoc($res);
		
	    if(count($row) > 0)
		{
		  // $var = rand(1000,9999);
		   $var = 1111;
		   $sms = "Your OTP is for registration - ".$var;
		   $res =  mysqli_query($con,"UPDATE `user` set `otp_number`='".$var."' where id= ".$row['id']);
	//	echo   "https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=5jJ0kuRg4kGRZ5iLC95wtA&senderid=TESTIN&channel=2&DCS=0&flashsms=0&number=91".$input->mobile_no."&text=".urlencode($sms)."&route=13";
		   file("https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=5jJ0kuRg4kGRZ5iLC95wtA&senderid=TESTIN&channel=2&DCS=0&flashsms=0&number=91".$input->mobile_no."&text=".urlencode($sms)."&route=13");
		  $return['success']=1;   
		  $return['result'] = "OTP is send to your number please check your phone.";
		}else{
		 //  $var = rand(1000,9999);
		    $var = 1111;
		   $sms = "Your OTP is for registration - ".$var;
		   $pass = substr(hash('sha512', $input->mobile_no.$enc_key ), 0, 10);
		   $qry = "INSERT INTO user (`username`,`password`,`name_surname`,`phone`,`type`,`activated`,`registration_date`,`otp_number`) VALUES('".$input->mobile_no."','".$pass."','".$input->mobile_no."','".$input->mobile_no."','USER','0','".date('Y-m-d H:i:s')."','".$var."')";
		   mysqli_query($con,$qry);
		   file("https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=5jJ0kuRg4kGRZ5iLC95wtA&senderid=TESTIN&channel=2&DCS=0&flashsms=0&number=91".$input->mobile_no."&text=".urlencode($sms)."&route=13");
		    $return['success']=1;   
		    $return['result'] = "OTP is send to your number please check your phone.";
		}
	    
 
 }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>