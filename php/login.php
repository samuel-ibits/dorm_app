<?php

	
$u=$_POST['phone'];
$p=$_POST['pass'];

$url = "https://api.dorm.com.ng/loginapi.php?phone=".$u."&pass=".$p."";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	$userid=$result->userid;
	$token=$result->tokenid;

	
	setcookie("dormpage", "studytools.php", time() + (86400 * 30), "/"); // 86400 = 1 day
	
	
	
	if($result->response_code==200){
Echo '<script type="text/Javascript">window.location.href ="https://app.dorm.com.ng/studytools.php";</script>';
	}else{
		echo $result->response_code.$result->userid;
	}
    
	?>