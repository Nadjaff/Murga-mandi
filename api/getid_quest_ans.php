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
        if( isset( $input->sender_id) && ( $input->sender_id !='' ))
        {
           $wh_cond .= ' and `sender_id` ="'. $input->sender_id.' " ';
        }
         $sql1 = "Select * from `question` where `status`= '0' ".$wh_cond;
	    $res1 = mysqli_query($con,$sql1);
        $result_array=array();
        while($row1 = mysqli_fetch_assoc( $res1)){
		   $result_array[$count]['question'] =array('id'=>$row1['id'],'doctor_id' => $row1['doctor_id'],'sender_id' => $row1['sender_id'],
		   'question' => $row1['question'],'user_image' => $website_url.'user_image/'.$row1['upload'],'date_time'=>$row1['date_time']);
		  
		    $sql2 = "Select * from `answer_pellet` where `status`= '0' and `queston_id` = '".$row1['id']."'";
            $res2 = mysqli_query($con,$sql2);
			$row2 = mysqli_fetch_assoc( $res2);
			
			$sql3 = "Select * from `user` where `id`= '".$row2['docter_id']."'";
            $res3 = mysqli_query($con,$sql3);
			$row3 = mysqli_fetch_assoc( $res3);
		    if(isset($row2['answer'])){
		    $result_array[$count]['answer'] =array('id'=>$row2['id'],'doctor_id' => $row2['docter_id'],'doctor_name' => $row3['name_surname'],
		   'doctor_img' => $website_url.'files/'.$row3['image_user_filename'],'answer' => $row2['answer'],'date'=>$row2['date']);
		     }
			$sql4 = "Select * from `comment_qna` where `question_id` = '".$row1['id']."'";
			$res4 = mysqli_query($con,$sql4);
			if(count($res4) > 0){
				while($row4 = mysqli_fetch_assoc( $res4)){
				    $result_array[$count]['comments'][]=$row4;
				}
			}
		   $count++;
		}
	    $return['success']=1;   
		$return['result'] = $result_array;
	
 
 echo json_encode($return);
?>