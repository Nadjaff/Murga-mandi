<?php
 include_once('db_con.php');
 
 $input = (object)$_POST;
 $error=array();
 $return = array();
 if(isset($input) && (isset($input->user_id))){
    $sql = "select * from user where id='".$input->user_id."' and activated = '1' "; 
	$res =  mysqli_query($con,$sql);
	$result1 = mysqli_fetch_assoc($res);
	if( isset($result1['id']))
	{
		   
   /*  if(!isset($input->name) || ($input->name == ''))
	 {
		$error[] = "Name is required.";
	 }*/
	 /* if(!isset($input->mail) || ($input->mail == '') || (!filter_var($input->mail, FILTER_VALIDATE_EMAIL)))
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
	 }*/
	 if(!isset($input->phone) || ($input->phone == ''))
	 {
		$error[] = "Phone No. is required.";
	 }
	/*  if(!isset($input->profession) || ($input->profession == ''))
	 {
		$error[] = "Profession is required.";
	 }*/
	  //file upload
	  $newfil = '';
	    if(isset($_FILES["user_image"]) && $_FILES["user_image"]["tmp_name"] != ''){
		
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
		}
	 if(count($error) > 0 )
	 {
	   $return['success']=0;
	   $return['result'] = $error;
	 }else
	 {   
	         $user_up = "";
	         
	         if(isset($input->name) && ($input->name !='' )){
	            $user_up .= " `name_surname` = '".$input->name."'";
	         }
	          if(isset($input->mail) && ($input->mail !='' )){
	            if($user_up !='' )
	            {
	            $user_up .= " ,";
	            }
	            $user_up .= " `mail` = '".$input->mail."'";
	         }
	          if(isset($input->phone) && ($input->phone !='' )){
	            if($user_up !='' )
	            {
	            $user_up .= " ,";
	            }
	            $user_up .= " `phone` = '".$input->phone."'";
	         }
	          if(isset($input->profession) && ($input->profession !='' )){
	            if($user_up !='' )
	            {
	            $user_up .= " ,";
	            }
	            $user_up .= " `profession` = '".$input->profession."'";
	         }
	         if(isset($input->facebook_id) && ($input->facebook_id!='' )){
	            if($user_up !='' )
	            {
	            $user_up .= " ,";
	            }
	            $user_up .= " `facebook_id` = '".$input->facebook_id."'";
	         }
	          if(isset($input->facebook_link) && ($input->facebook_link!='' )){
	            if($user_up !='' )
	            {
	            $user_up .= " ,";
	            }
	            $user_up .= " `facebook_link` = '".$input->facebook_link."'";
	         }
	          if(isset($input->show_phone) && ($input->show_phone!='' )){
	            if($user_up !='' )
	            {
	            $user_up .= " ,";
	            }
	            $user_up .= " `show_phone` = '".$input->show_phone."'";
	         }
	         if(isset($input->show_address) && ($input->show_address!='' )){
	            if($user_up !='' )
	            {
	            $user_up .= " ,";
	            }
	            $user_up .= " `show_address` = '".$input->show_address."'";
	         }
		 $sql1 = "UPDATE `user` SET ".$user_up." where id='".$input->user_id."'"; 		
		 $res1 =  mysqli_query($con,$sql1);
		 
		 if(isset($newfil) && $newfil != ''){
		  $sql2 = "UPDATE `user` SET `image_user_filename` = '".$newfil."' where id='".$input->user_id."'"; 		
		  $res2 =  mysqli_query($con,$sql2);
		 }
		 if( isset($result1['id']))
		 {		   
			 $return['success']=1;   
			 $return['result'] = "Record is updated"; 
		 }
      }
	 }else
		 {
			 $return['success']=0;   
			 $return['result'] = "No records found.";
		 }
	}else{
			$return['success']=0;   
			$return['result'] = "Error in code.";
		
	}
	
 echo json_encode($return);
?>