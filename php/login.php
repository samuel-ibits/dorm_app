<?php

$u=$_POST['phone'];
$p=$_POST['pass'];

$url = "https://api.dorm.com.ng/loginapi.php?phone".$u."&pass".$p;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	echo $result;
	echo "<table>";
	echo "<tr><td>Order ID:</td><td>$result->userid</td></tr>";
	
	echo "<tr><td>Response Code:</td><td>$result->response_code</td></tr>";
	echo "<tr><td>Response Desc:</td><td>$result->response_desc</td></tr>";
	echo "</table>";

    ?>