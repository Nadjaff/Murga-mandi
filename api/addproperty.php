<?php
 include_once('db_con.php'); 
 $input = (object)$_POST;
 $error=array();
 $return = array();
 if(isset($input) ){
 //file upload
  
        foreach($_FILES["prop_img"]["name"] as $ky=>$vy){
		$target_dir = "../files/";
		$newfil[$ky] = time().basename($_FILES["prop_img"]["name"][$ky]);
		$target_file = $target_dir .$newfil[$ky];
		$newfildata[$ky]='"'.$newfil[$ky].'"';
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
	    $check = getimagesize($_FILES["prop_img"]["tmp_name"][$ky]);
		if($check !== false) {
			
			$uploadOk = 1;
		} else {
			$error[] =  "File is not an image.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["prop_img"]["size"][$ky] > 500000) {
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
			if (move_uploaded_file($_FILES["prop_img"]["tmp_name"][$ky], $target_file)) {
				
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
	   $img_repos=implode(',',$newfildata);
	   $img_repos='['.$img_repos.']';
	   
       $gps=$input->lat.','.$input->lng;
       $res1 =  mysqli_query($con,"INSERT INTO `property`(`gps`,`lat`,`lng`,`date`,`date_modified`,`address`,`image_filename`,`image_repository`,`is_activated`)  VALUES ('".$gps."','".$input->lat."','".$input->lng."','".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."','".$input->address."','".$newfil[0]."','".$img_repos."','0')");
	   $last_id = mysqli_insert_id($con);
	    mysqli_query($con,"insert into `property_user`(`property_id`,`user_id`) values ('".$last_id."','".$input->user_id."')");
		mysqli_query($con,"insert into `property_value` (`language_id`,`property_id`,`option_id`,`value`) values('1','".$last_id."','36','".$input->average_rate."')");
		mysqli_query($con,"insert into `property_value` (`language_id`,`property_id`,`option_id`,`value`) values('1','".$last_id."','95','".$input->qty."')");
		mysqli_query($con,"insert into `property_value` (`language_id`,`property_id`,`option_id`,`value`) values('1','".$last_id."','3','".$input->average_wt."')");
		mysqli_query($con,"insert into `property_value` (`language_id`,`property_id`,`option_id`,`value`) values('1','".$last_id."','8','".$input->description."')");
		mysqli_query($con,"insert into `property_value` (`language_id`,`property_id`,`option_id`,`value`) values('1','".$last_id."','2','".$input->breed."')");
		
	  }
	    $return['success']=1;   
		$return['result'] = "You have successfully added property.";
 
  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>