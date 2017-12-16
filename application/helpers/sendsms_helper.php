<?php
function sendsms($to, $message) {

$sender = 'TESTIN'; // Need to change

$smsGatewayUrl = 'www.smsgatewayhub.com';

$apikey = 'FgZ6ExuZNk67JDD6OERASA'; // Need to change

$textmessage = $message;

$api_element = '/api/mt/SendSMS';

$api_params = $api_element.'?APIKey='.$apikey.'&senderid='.$sender.'&channel=2&DCS=0&flashsms=0&to='.$to.'&message='.$textmessage.'&route=13';
$smsgatewaydata = $smsGatewayUrl.$api_params;

$url = $smsgatewaydata;
    
    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        //,CURLOPT_FOLLOWLOCATION => true
    ));
    

    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    
    //get response
    $output = curl_exec($ch);
    
    
    
    curl_close($ch);
    
   
}
?>