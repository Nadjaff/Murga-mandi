<?php
 include_once('db_con.php');
 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
$wh_cond = '';
        $count=0;
        if(isset( $input->doctor_id) && ( $input->doctor_id !='' ) )
        {
          $wh_cond .= ' and `doctor_id` ="'. $input->doctor_id.' " ';
        }
       
         $sql1 = "Select * from `question` where `status`= '0' ".$wh_cond." GROUP BY `sender_id`";
	 $res1 = mysqli_query($con,$sql1);
        $result_array=array();
        while($row1 = mysqli_fetch_assoc( $res1)){
	           
			$sql3 = "Select * from `user` where `id`= '".$row1['sender_id']."'";
                        $res3 = mysqli_query($con,$sql3);
			$row3 = mysqli_fetch_assoc( $res3);
		    if($row3['name_surname']!=''){
		    $result_array[] =array('id'=>$row3['id'],'name' => $row3['name_surname'],
		   'profile_img' => $website_url.'files/thumbnail/'.$row3['image_user_filename']);
		    }
			
		   $count++;
		}
	    $return['success']=1;   
		$return['result'] = $result_array;
	
 
 echo json_encode($return);
?>