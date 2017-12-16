<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Name:  Twilio
	*
	* Author: Ben Edmunds
	*		  ben.edmunds@gmail.com
	*         @benedmunds
	*
	* Location:
	*
	* Created:  03.29.2011
	*
	* Description:  Twilio configuration settings.
	*
	*
	*/

	/**
	 * Mode ("sandbox" or "prod")
	 **/
	$config['mode']   = 'sandbox';

	/**
	 * Account SID
	 **/
	// $config['account_sid']   = 'ACacdc9613f2f3d7f4572f3115d37a4377'; //Live
	// $config['account_sid']   = 'AC0321d162797afbfb3d1f4decf1263938'; // Client test
	$config['account_sid']   = 'AC3c21051cc0b4b1a4a7328a0c12b48bfa'; //Dev Test

	/**
	 * Auth Token
	 **/
	// $config['auth_token']    = '52ccd68ca035682b2ce438a262592b5d'; //Live
	// $config['auth_token']    = '6ca26e1b96fdba483839a64deb6fc530'; // Client test
	$config['auth_token']    = 'b64f2943d29561db4d0f3857e75cfe12'; //Dev Test

	/**
	 * API Version
	 **/
	$config['api_version']   = '2010-04-01';

	/**
	 * Twilio Phone Number
	 **/
	// $config['number']        = '+19542800015';
	$config['number']        = '+12569801015';


/* End of file twilio.php */