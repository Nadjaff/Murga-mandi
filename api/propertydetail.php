<?php
 include_once('db_con.php'); 
 $input = (object)$_POST;
 $error=array();
 $return = array();
 if(isset($input) && isset($input->property_id)){
       $res1 =  mysqli_query($con,"select counter_views,lat,lng,image_repository,address from property where id='".$input->property_id."' and is_activated = '1'");
	   $row1 =  mysqli_fetch_assoc($res1);
	  // print_r($row1 );
	   $row1['image_repository'] = str_replace("[","",$row1['image_repository']);
	   $row1['image_repository'] = str_replace("]","",$row1['image_repository']);
	  // print_r($row1['image_repository']);
	   $array_img=explode(",",$row1['image_repository']);
	   $img_ar = array();
	   foreach($array_img as $val)
	   {
	     $val = str_replace('"','',$val);
	     $img_ar[] = $website_url."files/".$val;
	   }
	   $res2 =  mysqli_query($con,"select user.name_surname,user.image_user_filename from user inner join property_user on property_user.user_id = user.id  where property_user.property_id='".$input->property_id."'");
	   $row2 =  mysqli_fetch_assoc($res2);
	  // print_r($row2);
	   $res3 =  mysqli_query($con,"SELECT * FROM `property_value` WHERE  `option_id` = 3   AND `property_id`='".$input->property_id."' and language_id='1' and value !=''");
	   $row3 =  mysqli_fetch_assoc($res3);
	  // print_r($row3);
	   $res4 =  mysqli_query($con,"SELECT * FROM `property_value` WHERE  `option_id` = 95   AND `property_id`='".$input->property_id."'  and language_id='1' and value !=''");
	   $row4 =  mysqli_fetch_assoc($res4);
	 //  print_r($row4);
	   $res5 =  mysqli_query($con,"SELECT * FROM `property_value` WHERE  `option_id` = 36   AND `property_id`='".$input->property_id."'  and language_id='1' and value !=''");
	   $row5 =  mysqli_fetch_assoc($res5);
	 //  print_r($row5);
	   $res6 =  mysqli_query($con,"SELECT AVG(stars) as avg FROM `reviews`  WHERE  reviews.listing_id = '".$input->property_id."' and reviews.is_visible ='1'");	 
	   $row6 =  mysqli_fetch_assoc($res6);
	   $revw=$row6['avg'];
	   
	   if(isset($row1["lat"])){
		   $result = array("lat"=>$row1['lat'],
		   "lng"=>$row1['lng'],
		   "images"=>$img_ar,"seller"=>$row2['name_surname'],"seller_image"=> $website_url."files/".$row2['image_user_filename'],
		   "average_weight" => $row3['value'],"quantity" => $row4['value'],"average_rate" => $row5['value'],"review"=> $revw
		   );
		     $tota_view = $row1['counter_views']+1;
		     mysqli_query($con,"UPDATE `property` SET `counter_views` = '". $tota_view."' where `id`='".$input->property_id."'");
		    $return['success']=1;   
	        $return['result'] = $result;
	   }else{
	        $result = array("No record Found.");
		    $return['success']=0;   
	        $return['result'] = $result;
	   }
	 
 
  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>