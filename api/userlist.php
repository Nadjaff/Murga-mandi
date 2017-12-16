<?php
 include_once('db_con.php');
 
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
 if(isset($input)){
	 $sql = "select id,image_user_filename,name_surname,experience,expertise,profession,aboutMe from user where type='".$input->type."' and activated = '1' "; 
	 $res =  mysqli_query($con,$sql);
	 $new_arr = array();
	 while($row =  mysqli_fetch_assoc($res))
	 {
		$new_arr[] = $row;
	 }
		
		$return['success']=1;   
		$return['result'] = $new_arr;
}else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
    
}
 
 echo json_encode($return);
?>