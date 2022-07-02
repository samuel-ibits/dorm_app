<?php


$url = "www.api.dorm.com.ng/profilefetch.php";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	
    
	?>