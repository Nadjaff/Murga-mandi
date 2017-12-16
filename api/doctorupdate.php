<?php
 include_once('db_con.php');
 
 $input = (object)$_POST;
 $error=array();
 $return = array();
 if(isset($input) && (isset($input->user_id))){
    $sql = "select * from user where id='".$input->user_id."'"; 
	$res =  mysqli_query($con,$sql);
	$result1 = mysqli_fetch_assoc($res);
	if( isset($result1['id']))
	{
		   
     if(!isset($input->name) || ($input->name == ''))
	 {
		$error[] = "Name is required.";
	 }
	  if(!isset($input->mail) || ($input->mail == '') || (!filter_var($input->mail, FILTER_VALIDATE_EMAIL)))
	 {
		$error[] = "E-mail is required.";
	 }else
	 {
		$res =  mysqli_query($con,"SELECT * FROM user where mail='".$input->mail."' and id != '".$input->user_id."'");
		$row =  mysqli_fetch_row($res);
		if(count($row) > 0)
		{
		  $error[] = "E-mail is already exist.";
		}
	 }
	 if(!isset($input->phone) || ($input->phone == ''))
	 {
		$error[] = "Phone No. is required.";
	 }
	  if(!isset($input->phone2) || ($input->phone2 == ''))
	 {
		$error[] = "Office No. is required.";
	 }
	  if(!isset($input->address) || ($input->address == ''))
	 {
		$error[] = "Address is required.";
	 }
	 if(!isset($input->about_me) || ($input->about_me == ''))
	 {
		$error[] = "About Me is required.";
	 }
	 if(!isset($input->experience) || ($input->experience == ''))
	 {
		$error[] = "Experience is required.";
	 }
	 if(!isset($input->profession) || ($input->profession == ''))
	 {
		$error[] = "Profession is required.";
	 }
	  //file upload
		$target_dir = "../files/thumbnail/";
		$newfil = time().basename($_FILES["user_image"]["name"]);
		$target_file = $target_dir .$newfil;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
	    $check = getimagesize($_FILES["user_image"]["tmp_name"]);
		if($check !== false) {
			
			$uploadOk = 1;
		} else {
			$error[] =  "File is not an image.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["user_image"]["size"] > 500000) {
			$error[] = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			$error[] =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$error[] =  "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) {
				
			} else {
				$error[]= "Sorry, there was an error uploading your file.";
			}
		}
	 if(count($error) > 0 )
	 {
	   $return['success']=0;
	   $return['result'] = $error;
	 }else
	 {  
	 		  
		 $sql1 = "UPDATE `user` SET `name_surname` = '".$input->name."' , `mail` = '".$input->mail."' , `phone` = '".$input->phone."' ,`phone2` = '".$input->phone2."'  ,`aboutMe` = '".$input->about_me."' ,`address` = '".$input->address."' ,`experience` = '".$input->experience."' ,`profession` = '".$input->profession."' ,`image_user_filename` = '".$newfil."'   where id='".$input->user_id."'"; 
		 $res1 =  mysqli_query($con,$sql1);
		
		 if( isset($result1['id']))
		 {
		   
			 $return['success']=1;   
			 $return['result'] = array("Record is updated");
			
			 
		 }
      
	   }
	  }else
		 {
			 $return['success']=0;   
			 $return['result'] = array("No records found.");
		 }
	
	}else{
			$return['success']=0;   
			$return['result'] = "Error in code.";
		
	}
	
 echo json_encode($return);
?>