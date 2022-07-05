<?php

	
$u=$_POST['phone'];
$p=$_POST['pass'];

$url = "https://api.dorm.com.ng/loginapi.php?phone=".$u."&pass=".$p."";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	print_r($result);

	$token=$result->userid;

	
	setcookie("dormpage", "studytools.php", time() + (86400 * 30)); // 86400 = 1 day
	
	
	
	if($result->response_code==200){
		Echo '<script type="text/Javascript">alert("login Succesful");</script>';

Echo '<script type="text/Javascript">window.location.href ="https://app.dorm.com.ng/studytools.php";</script>';
	}

	if($result->response_code==500){
		Echo '<script type="text/Javascript">alert("login failed check password and try again");</script>';

		Echo '<script type="text/Javascript">window.location.href ="https://app.dorm.com.ng/index.php";</script>';
	
	}
    
	?>