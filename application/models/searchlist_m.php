<?php
class Searchlist_m extends MY_Model {	
	  public function _get_listing($val,$page,$limit){	
			  $this->db->select('p.*,pro_val.value as exp_price ,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=3  limit 1) AS avg_wgt,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=95 limit 1 ) AS qty,(select u.name_surname from user AS u JOIN property_user AS pu on pu.user_id=u.id  where p.id=pu.property_id  limit 1) AS user_name');
			  $this->db->from("property AS p");
			  $this->db->join("property_value as pro_val","pro_val.property_id= p.id","left");
			   $this->db->join("property_user as pro_user","pro_user.property_id= p.id","left");
			  $this->db->where('pro_val.option_id','36');	
			  $this->db->where('p.is_activated',1);	
			  if((isset($val['sort_by'])) && ($val['sort_by']=="" || $val['sort_by']=="recent")){
				$this->db->order_by("p.id", "desc");  
			  }
			   if((isset($val['sort_by'])) && ($val['sort_by']=="high")){
				$this->db->order_by("exp_price", "desc");  
			  }
			   if((isset($val['sort_by'])) && ($val['sort_by']=="low")){
				$this->db->order_by("exp_price", "asc");  
			  }
			  if((isset($val['user_id'])) && ($val['user_id']!="")){			  
              $this->db->where('pro_user.user_id',$val['user_id']);	
	           }
			  if((isset($val['is_featured'])) && ($val['is_featured']!="")){			  
              $this->db->where('p.is_featured',$val['is_featured']);	
	           }
               if((isset($val['cityfield'])) && ($val['cityfield']!="")){			  
              $this->db->like('p.search_values',$val['cityfield']);	
	           }
			  if((isset($val['ads_search'])) && ($val['ads_search']!="")){		
			    $this->db->like('p.search_values',$val['ads_search']);	
			  }
			  $this->db->group_by('p.id');
				$this->db->limit($limit,(($page-1)*$limit+1) );
			  $query = $this->db->get();
			//  echo $this->db->last_query();
			//  print_r($query->result_array());
			  $re_arr=$query->result_array();	
			  $nwarr=array();
			  $ij=0;
			  if(isset($_GET['min']) && $_GET['min']!='' && isset($_GET['max']) && $_GET['max']!=''  && isset($_GET['latfrom']) && $_GET['latfrom']!='' && isset($_GET['longfrom']) && $_GET['longfrom']!='' ){
			  foreach($re_arr as $key=>$re_val){
				  $dist=$this->distance($_GET['latfrom'], $_GET['longfrom'], $re_val['lat'], $re_val['lng'], "k");
				  if($re_val['exp_price'] >= $_GET['min'] && $re_val['exp_price'] <= $_GET['max']  && $re_val['avg_wgt'] >= $_GET['wt_min'] && $re_val['avg_wgt'] <= $_GET['wt_max'] && $dist >= $_GET['dst_min'] && $dist <= $_GET['dst_max']){
					 $nwarr[$ij]=$re_val;
					 $nwarr[$ij]['distance']=$dist;					 
					 $ij++;
				  }				  
			   }
			     return $nwarr;
			  }else
			  {
				  
				foreach($re_arr as $key=>$re_val){
				  $dist=$this->distance($_GET['latfrom'], $_GET['longfrom'], $re_val['lat'], $re_val['lng'], "k");
				  $nwarr[$ij]=$re_val;
				  $nwarr[$ij]['distance']=$dist;
				  $ij++;
				  
                				  
			   }
				 return $nwarr; 
			  }
			 
		  }
		  
		  public function record_count($val) {
			$this->db->select('*,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=36 limit 1) AS exp_price,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=3  limit 1) AS avg_wgt,(select value from property_value AS pv where p.id=pv.property_id AND pv.option_id=95 limit 1 ) AS qty,(select u.name_surname from user AS u JOIN property_user AS pu on pu.user_id=u.id  where p.id=pu.property_id  limit 1) AS user_name');
			  $this->db->from("property AS p");
			  $this->db->where('p.is_activated',1);	
			  if((isset($val['sort_by'])) && ($val['sort_by']=="")){
				$this->db->order_by("id", "desc");  
			  }
			  if((isset($val['is_featured'])) && ($val['is_featured']!="")){			  
              $this->db->where('p.is_featured',$val['is_featured']);	
	           }
               if((isset($val['cityfield'])) && ($val['cityfield']!="")){			  
              $this->db->like('p.search_values',$val['cityfield']);	
	           }
			    if((isset($val['ads_search'])) && ($val['ads_search']!="")){		
			  $this->db->like('p.search_values',$val['ads_search']);	
				}
			  $query = $this->db->get();
			// echo $this->db->last_query();
			  //return $query->result_array();
			  $re_arr=$query->result_array();
			  $nwarr=array();
			  if(isset($_GET['min']) && $_GET['min']!='' && isset($_GET['max']) && $_GET['max']!=''  ){
			  foreach($re_arr as $key=>$re_val){
				   $dist=$this->distance($_GET['latfrom'], $_GET['longfrom'], $re_val['lat'], $re_val['lng'], "k");
				  if($re_val['exp_price'] >= $_GET['min'] && $re_val['exp_price'] <= $_GET['max']  && $re_val['avg_wgt'] >= $_GET['wt_min'] && $re_val['avg_wgt'] <= $_GET['wt_max'] && $dist >= $_GET['dst_min'] && $dist <= $_GET['dst_max']){
					 $nwarr[]=$re_val;
				  }				 
			   }
			   return count($nwarr);
				
			  }else
			  {
				 return count($re_arr); 
			  }
          }
		  
		public function distance($lat1, $lon1, $lat2, $lon2, $unit) {
			  $theta = $lon1 - $lon2;
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
		}
	}


