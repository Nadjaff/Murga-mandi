<?php
class Mobileregister extends Frontend_Controller
{
    public function __construct ()

	{

		parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
		$this->load->model('mobile_register');
		 $this->load->model('language_m');
		 $this->load->helper('sendsms_helper');
	}
    public function index()
    {
       
    }
	public function otpsend(){
	  
	   $this->load->library('twilio');
	   $lang_code = $this->data['lang_code'];
	   if(isset($_POST['phone']))
	   {
		   
	      $res = $this->mobile_register->check_mobile($_POST);
		  if($res == '0')
		  {
			
		  $from = '+12569801015';
          $to = '91'.$_POST['phone'];
          $var = rand(1000,9999);
          $message = "Your OTP is for registration - ".$var;
         // $response = $this->twilio->sms($from, $to, $message);
		  $this->mobile_register->send_otp($_POST,$var);
		  // $this->mobile_register->sendsms($to,$message);
		  //sendsms($to,$message);
		   file(("http://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=FgZ6ExuZNk67JDD6OERASA&senderid=TESTIN&channel=2&DCS=0&flashsms=0&number=".$to."&text=".urlencode($message)."&route=13"));
		  redirect('mobileregister/otp/'.$lang_code.'?id='.$_POST["phone"]);
		  }else{
		    $this->mobile_register->otp_resend($_POST["phone"]);
			 redirect('mobileregister/otp/'.$lang_code.'?id='.$_POST["phone"]);
		//  redirect('mobileregister/otpsend/'.$lang_code.'?err=1');
		  }
		}
		$output = $this->parser->parse($this->data['settings_template'].'/'.'otp_send.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output);  
	}
   public function otp(){
       $lang_code = $this->data['lang_code'];
	   
	   if(isset($_POST['otp']) && ($_POST['otp'] !='' ))
	   { 
	      $res = $this->mobile_register->check_mobile_otp($_POST);
		  if($res)
		  {
		      redirect('frontend/myproperties/'.$lang_code);
		  }else{
		     $this->session->set_flashdata('error',  lang_check('Please enter correct OTP'));

		      redirect('mobileregister/otp/'.$lang_code.'?id='.$_POST["phone"]);
		  }
	   }
	  
		$output = $this->parser->parse($this->data['settings_template'].'/'.'otp.php', $this->data, TRUE);
        echo str_replace('assets/', base_url('templates/'.$this->data['settings_template']).'/assets/', $output);  
	}
	public function otpresend()
	{	
	$lang_code = $this->data['lang_code'];
	    $this->mobile_register->otp_resend($_GET['id']);
	    redirect('mobileregister/otp/'.$lang_code.'?id='.$_GET['id']);
	}
}