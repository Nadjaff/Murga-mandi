<?php
 include_once('db_con.php'); 
 $input = (object)$_POST;
 $error=array();
 $return = array();
 if(isset($input) ){
    $arr_func  = array();
    $whre="";
    
    if(isset($input->property_id) && ($input->property_id !=''))
    {
       $whre .=" `property_id` = '".$input->property_id."'";
    }
    if(isset($input->user_first) && ($input->user_first !='') && (!isset($input->user_sec)))
    {
       if($whre !='' )
       {
         $whre .= " AND";
       }
       $whre.=" (`user_first` = '".$input->user_first ."' or `user_sec`='".$input->user_first."')";
    }
    if(isset($input->user_first) && ($input->user_first !='') && (isset($input->user_sec)) && ($input->user_sec !='' ))
    {
       if($whre !='' )
       {
         $whre .=" AND";
       }
       $whre .=" ((`user_first`='".$input->user_first ."' and  `user_sec` ='".$input->user_sec."')
		 or  (`user_first`='".$input->user_sec ."' and  `user_sec` ='".$input->user_first."'))";
    }

            	    $res =  mysqli_query($con,"SELECT * FROM  `chat` where ". $whre."
		 and `status`='1'");
		 $kyc=0;
	    while($row =  mysqli_fetch_assoc($res)){
			$arr_func[$kyc] = $row;
			$res1 =  mysqli_query($con,"SELECT * FROM  `user` where `id`='".$row['user_first']."'");
			$row1 =	mysqli_fetch_assoc($res1);
			$arr_func[$kyc]['user_first_thumbnail']=$website_url.'files/thumbnail/'.$row1['image_user_filename'];
                        
                        $res2 =  mysqli_query($con,"SELECT * FROM  `user` where `id`='".$row['user_sec']."'");
			$row2 =	mysqli_fetch_assoc($res2);
			$arr_func[$kyc]['user_sec_thumbnail']=$website_url.'files/thumbnail/'.$row2['image_user_filename'];
			
			$res3 =  mysqli_query($con,"SELECT * FROM  `property` where `id`='".$row['property_id']."'");
			//echo "SELECT * FROM  `property` where `id`='".$row['property_id']."'";
			$row3 =	mysqli_fetch_assoc($res3);
			$arr_func[$kyc]['property_image']=$website_url."files/".$row3['image_filename'];

			$kyc++;
		}
		if(count($arr_func) > 0){
		  $return['success']=1;   
		  $return['result'] = $arr_func;
		}
		else{
		  $return['success']=0;   
		   $return['result'] = "Chat is not found.";
		}
	    
		
 
  }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>