<?php
 include_once('db_con.php');
  function distance($lat1, $lon1, $lat2, $lon2, $unit) {
   
			  $theta = $lon1 - $lon2;
			  if(isset($lat1) && ($lat1 !='' ) && isset($lat2) && ($lat2 !='' ) && isset($lat2) && ($lat2 !='' )){
			  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
			  $dist = acos($dist);
			  $dist = rad2deg($dist);
			  $miles = $dist * 60 * 1.1515;
			  $unit = strtoupper($unit);
			  if ($unit == "K") {
				return ($miles * 1.609344);
			  } else if ($unit == "N") {
				  return ($miles * 0.8684);
				} else {
					return $miles;
				  }
			}else{
			   return false;
			}
		}

 $json = file_get_contents("php://input");
 $input = (object)$_POST;
 $error=array();
 $return = array();
if(isset($input)){
 $sql="select p.*,pro_val.value as exp_price ,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=3  limit 1) AS avg_wgt,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=95 limit 1 ) AS qty,(select u.name_surname from user AS u JOIN property_user AS pu on pu.user_id=u.id  where p.id=pu.property_id  limit 1) AS user_name, (select u.image_user_filename from user AS u JOIN property_user AS pu on pu.user_id=u.id  where p.id=pu.property_id  limit 1) AS image_user_filename from property AS p left join property_value as pro_val on pro_val.property_id= p.id left join property_user as pro_user on pro_user.property_id= p.id";
  $where = " where pro_val.option_id='36' and p.is_activated = '1'"	;
  if((isset($input->user_id)) && ($input->user_id != "")){			  
       $where .= " and pro_user.user_id = '".$input->user_id."'";	
  }
   if((isset($input->is_featured)) && ($input->is_featured != "")){			  
       $where .= " and p.is_featured = '".$input->is_featured."'";	
  }
   if((isset($input->cityfield)) && ($input->cityfield != "")){			  
       $where .= " and p.search_values like '%".$input->cityfield."%'";	
  }
   if((isset($input->ads_search)) && ($input->ads_search != "")){			  
       $where .= " and p.search_values like '%".$input->ads_search."%'";	
  }
  if( $input->limit == "")
  {
  
    $input->limit=10;
  }
  if($input->page==="")
  {
    $input->page=1;
  }
  if($input->page == 1)
  {
   $offset=0;
  }else{
   $offset=($input->page-1)*$input->limit+1;
  }
  $sort_by = "";
  if((isset($input->sort_by)) && ($input->sort_by=="" || $input->sort_by=="recent")){
				$sort_by = " ORDER BY p.id desc";  
   }
    if((isset($input->sort_by)) && ($input->sort_by =="high")){
				$sort_by = " ORDER BY exp_price desc";  
   }
    if((isset($input->sort_by)) && ($input->sort_by =="low")){
				$sort_by = " ORDER BY exp_price asc";  
   }
   $sql1 = $sql." group by `p`.`id`";
   $res1 =  mysqli_query($con,$sql1);
   $res2 =  mysqli_num_rows($res1);
   $sql .=  $where." group by `p`.`id` " .$sort_by." LIMIT ". $offset." , ".$input->limit;
  // echo $sql;exit;
    $res =  mysqli_query($con,$sql);//print_r($res);exit;
	$ij=0;
	$nwarr=array();
	
    if(isset($input->min) && $input->min!='' && isset($input->max) && $input->max !=''  && isset($input->latfrom) && $input->latfrom != '' && isset($input->longfrom) && $input->longfrom != '' ){
			  while($re_val =  mysqli_fetch_assoc($res)){
				  $dist=distance($input->latfrom, $input->longfrom, $re_val['lat'], $re_val['lng'], "k");
				  if($re_val['exp_price'] >= $input->min && $re_val['exp_price'] <= $input->max && $re_val['avg_wgt'] >= $input->wt_min && $re_val['avg_wgt'] <= $input->wt_max && $dist >= $input->dst_min && $dist <= $input->dst_max){
					 $nwarr[$ij]=$re_val;
					 $nwarr[$ij]['distance']=$dist;		
					 $nwarr[$ij]['image_filename']= $website_url.'files/'.$re_val['image_filename']; 
					 if( $nwarr[$ij]['image_user_filename'] != '')
					 {
					    $nwarr[$ij]['image_user_filename']= $website_url.'files/'.$re_val['image_user_filename']; 
					 }else{
					    $nwarr[$ij]['image_user_filename']=''; 
					 }
					 			 
					 $ij++;
				  }				  
			   }
			    
			  }else
			  {
				  
				 while($re_val =  mysqli_fetch_assoc($res)){
				
				  $dist=distance($input->latfrom, $input->longfrom, $re_val['lat'], $re_val['lng'], "k");
				  $nwarr[$ij]=$re_val;
				  $nwarr[$ij]['distance']=$dist;
				  	 if( $nwarr[$ij]['image_user_filename'] != '')
					 {
					    $nwarr[$ij]['image_user_filename']= $website_url.'files/'.$re_val['image_user_filename']; 
					 }else{
					    $nwarr[$ij]['image_user_filename']=''; 
					 }
				   $nwarr[$ij]['image_filename']= $website_url.'files/'.$re_val['image_filename']; 
				  $ij++;
				  }
                	 		  
			   }
 
	    if(count($nwarr) > 0 )
		{
		   $return['success']=1;
           $return['result'] =array("page"=>$input->page,"limit"=>$input->limit,"Total Record"=>$res2,"data"=>$nwarr);
		}else{
		   $return['success']=0;
           $return['result'] = 'No records found.';
		}
	
 }else{
        $return['success']=0;   
		$return['result'] = "Error in code.";
 }
 
 echo json_encode($return);
?>