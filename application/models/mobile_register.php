<?php

class Mobile_register extends MY_Model {
    public function send_otp($input,$otp_nu)
	{
	  
	  $pass = substr(hash('sha512', $input['phone'].config_item('encryption_key')), 0, 10); 
	  $qry = "INSERT INTO user (`username`,`password`,`name_surname`,`phone`,`type`,`activated`,`registration_date`,`otp_number`) VALUES('".$input['phone']."','".$pass."','".$input['phone']."','".$input['phone']."','USER','0','".date('Y-m-d H:i:s')."','".$otp_nu."')";
	  $this->db->query($qry);
	 
	}
   
    public function check_mobile($input)
	{
	  $qry ="SELECT * FROM `user` where phone ='".$input['phone']."'";
	  $query = $this->db->query($qry);
	  return $query->num_rows();
	}
    
	public function check_mobile_otp($data)
	{
	  
		$qry ="SELECT * FROM `user` where phone ='".$data['phone']."' and otp_number ='".$data['otp']."'";		
	    $query = $this->db->query($qry);		
		$user = $query->row();
		if(count($user) > 0)
		{
			$userdta=array('activated'=>'1','phone_verified'=>'1');
			$this->db->where('phone',  $data['phone']);
	
			if ($this->db->update('user',  $userdta)) {
			      $data1 = array(
                    'name_surname'=>$user->name_surname,
                    'username'=>$user->username,
                    'remember'=>0,
                    'id'=>$user->id,
                    'lang'=>$user->language,
                    'last_login'=>$user->last_login,
                    'loggedin'=>TRUE,
                    'type'=>$user->type,
                    'profile_image'=>'',
                    'last_activity'=>time()
                );
                $this->session->set_userdata($data1);                 
                $this->user_session_data = $data1;
				return true;
			}
		}else{
		        return false;
		
		}
	}
	
	public function otp_resend($mob_id)
	{
	  $rand = rand(1000,9999);
	  $data =array('otp_number'=> $rand);
	  $this->db->where('phone', $mob_id );
	  $this->db->update('user',  $data);
	  $to = '91'.$mob_id;
      $message = "Your OTP is for registration - ". $rand;
		 file(("http://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=FgZ6ExuZNk67JDD6OERASA&senderid=TESTIN&channel=2&DCS=0&flashsms=0&number=".$to."&text=".urlencode($message)."&route=13"));
	  
	}
	
	
	
	
	
}



