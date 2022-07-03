<?php

$url = "https://api.dorm.com.ng/profilefetch.php";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	echo'test'. $_COOKIE['dormtoken'].$_COOKIE['dormpage'].$_COOKIE['dormuserid'];
	echo"sdds". $result->phone;
  
	?>