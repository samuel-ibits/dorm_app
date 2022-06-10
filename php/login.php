<?php

$u=$_POST['phone'];
$p=$_POST['pass'];

$postRequest = array(
    'phone' => $u,
    'pass' => $p
);

$cURLConnection = curl_init('https://api.dorm.com.ng/loginapi.php');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

// $apiResponse - available data from the API request
$jsonArrayResponse - json_decode($apiResponse);
echo $jsonArrayResponse;
?>