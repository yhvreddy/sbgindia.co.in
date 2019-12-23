<?php 
	//request parameters array
	$requestParams = array(
	    'user' 			=> 'Keyitsol',
	    'Key'	 		=> 'fd83196d9dXX',
	    'senderid' 		=> 'NTFSMS',
	    'mobile' 		=> '+91'.'8019660099',
	    'accusage'		=>	1,
	    'message' 		=> 'ThankQ for register with us. Your register id : '.'SBG00'.'1'
	);

	$message = 'ThankQ for register with us. Your register id : '.'SBG00'.'1';
	//merge API url and parameters
	$apiUrl = "http://sms.commcryptnetworksolutions.com/submitsms.jsp?user=Keyitsol&key=fd83196d9dXX&mobile=+918142250099&message=".urlencode($message)."&senderid=SBGIND&accusage=1";


	//http://sms.commcryptnetworksolutions.com/submitsms.jsp?user=Keyitsol&key=fd83196d9dXX&mobile=+918142250099&message=testmesage&senderid=NTFSMS&accusage=1

	// $apiUrl = "http://sms.commcryptnetworksolutions.com/submitsms.jsp?";
	// foreach($requestParams as $key => $val){
	//     $apiUrl .= $key.'='.urlencode($val).'&';
	// }
	// $apiUrl = rtrim($apiUrl, "&");

	//print_r($apiUrl);

	//API call
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $apiUrl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	print_r($output);
	curl_close($ch);

?>