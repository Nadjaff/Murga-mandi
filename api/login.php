<?php
 include_once('db_con.php');
 $json = file_get_contents("php://input");
  $input = (object)$_POST;
 $error=array();
 $return = array();
 $enc_key = 'fsdjio@&/%$fsdf657t3';
if(isset($input)){
 if(!isset($input->username) || ($input->username == ''))
 {
    $error[] = "Username is required.";
 }
 if(!isset($input->password) || ($input->password == ''))
 {
    $error[] = "Password is required.";
 }
 if(count($error)>0){
	  $return['success']=0;
     $return['result'] =$error;
 }
 else{
    $pass_hash = substr(hash('sha512', $input->password.$enc_key ), 0, 10);
    $res =  mysqli_query($con,"SELECT * FROM user where (username='".$input->username."' OR mail='".$input->username."') AND password='".$pass_hash."'");
	$row =  mysqli_fetch_assoc($res);
	
	if(count($row) > 0)
	{
	 $return['success']=1;
     $return['result'] =$row;
	}
	else{
		$return['success']=0;
     $return['result'] ="username and password are not match";
	}
 }
 }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 echo json_encode($return);
?>