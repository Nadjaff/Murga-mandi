<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
 $enc_key = 'fsdjio@&/%$fsdf657t3';
 if(isset($input)){
 if(!isset($input->name) || ($input->name == ''))
 {
    $error[] = "Name is required.";
 }
 if(!isset($input->username) || ($input->username == ''))
 {
    $error[] = "Username is required.";
 }
 else{
    $res =  mysqli_query($con,"SELECT * FROM user where username='".$input->username."'");
	$row =  mysqli_fetch_row($res);
	if(count($row) > 0)
	{
	  $error[] = "Username is already exist.";
	}
 }
 if(!isset($input->mail) || ($input->mail == '') || (!filter_var($input->mail, FILTER_VALIDATE_EMAIL)))
 {
    $error[] = "E-mail is required.";
 }else
 {
    $res =  mysqli_query($con,"SELECT * FROM user where mail='".$input->mail."'");
	$row =  mysqli_fetch_row($res);
	if(count($row) > 0)
	{
	  $error[] = "E-mail is already exist.";
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
  if(!isset($input->address) || ($input->address == ''))
 {
    $error[] = "Address is required.";
 }
 if(!isset($input->phone) || ($input->phone == ''))
 {
    $error[] = "Phone No. is required.";
 }
 
 if(count($error) > 0 )
 {
   $return['success']=0;
   $return['result'] = $error;
 }else
 {  $pass_hash = substr(hash('sha512', $input->password.$enc_key ), 0, 10);
  
     mysqli_query($con,"insert into `user`(`name_surname`,`username`,`password`,`address`,`phone`,`mail`,`type`,`language`,`activated`,`registration_date`) VALUES('".$input->name ."','".$input->username ."','".$pass_hash ."','".$input->address ."','".$input->phone ."' ,'".$input->mail."','USER','english','1','".date("Y-m-d h:i:s")."')");
	$last_id = mysqli_insert_id($con);
	$res1 =  mysqli_query($con,"SELECT * FROM user where id='".$last_id."'");
	$row1 =  mysqli_fetch_assoc($res1);
	$return['success']=1;
    $return['result'] = 'You have successfully registered.';
	$return['result_array'] = $row1;
 }
  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>