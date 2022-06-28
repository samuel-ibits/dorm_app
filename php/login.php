<?php 


function listener($f){
	include("connect.php");
	$_SESSION['dormuserid']="$f";
	
		
		   $date= date("Y-m-d h:i:sa");
	 $iiin = "INSERT INTO login (id, userid, date, page) VALUES ( '', '$f', '$date', 'loging username')";
	if ($conn17->query($iiin)==true) {
		
		header("Location:https://dorm.com.ng/v2/dm/html/studytools.php");
	
	}else{echo $conn17->error;}
	}

	
$u=$_POST['phone'];
$p=$_POST['pass'];

$url = "https://api.dorm.com.ng/loginapi.php?phone=".$u."&pass=".$p;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	//echo $result;
	
	

	setcookie("dormuserid", $result->userid, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie("dormtoken", $result->tokenid, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie("dormpage", "studytools.php", time() + (86400 * 30), "/"); // 86400 = 1 day
	listener($result->userid);
	
	?>
	if($result->response_code==200){
Echo '<script type="text/Javascript">window.location.href ="https://app.dorm.com.ng/main.php";</script>';
	}
    ?>