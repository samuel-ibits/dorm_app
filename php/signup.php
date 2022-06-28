<?php 
// function isValidTelephoneNumber(string $telephone, int $minDigits = 9, int $maxDigits = 14): bool {
//     if (preg_match('/^[+][0-9]/', $telephone)) { //is the first character + followed by a digit
//         $count = 1;
//         $telephone = str_replace(['+'], '', $telephone, $count); //remove +
//     }
    
//     //remove white space, dots, hyphens and brackets
//     $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone); 

//     //are we left with digits only?
//     return isDigits($telephone, $minDigits, $maxDigits); 
// }

// function normalizeTelephoneNumber(string $telephone): string {
//     //remove white space, dots, hyphens and brackets
//     $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone);
//     return $telephone;
// }

// $tel = '+9112 345 6789';
// if (isValidTelephoneNumber($tel)) {
//     //normalize telephone number if needed
//     echo normalizeTelephoneNumber($tel); //+91123456789
// }





$url = "http://www.api.dorm.com.ng/signupapi.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

   header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json; charset=UTF-8");
   header("Access-Control-Allow-Methods: POST");
   header("Access-Control-Max-Age: 3600");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{ "email":"ibito@fd.com" , "fname": "samuel" }';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>




<!-- 


$email=$_POST['email'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fulname=$fname." ". $lname;
$phon=$_POST['phone'];
$ch=strlen($phon);
$chh=is_numeric($phon);
if($ch<11 OR $ch>11 OR $chh!=1 ){$err=" Invalid phone-number";
}else{$phone=$phon;$err="";} 
$uname=$_POST['uname'];
$pas=$_POST['pass'];
$repass=$_POST['repass'];
if ($pas==$repass AND $err==""){$pass=$_POST['pass'];	$err2="";
$pockid='pocket'.rand();
$userid='user'.rand();
$tokenid= 'a'.$phone.$pass;
 $date= date("Y-m-d h:i:sa");


$url = "https://api.dorm.com.ng/signupapi.php?phone=".$u."&pass=".$p;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	//echo $result;
	
	

	setcookie("dormuserid", $result->userid, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie("dormtoken", $result->tokenid, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie("dormpage", "studytools.php", time() + (86400 * 30), "/"); // 86400 = 1 day
	
	
	?>
	if($result->response_code==200){
Echo '<script type="text/Javascript">window.location.href ="https://app.dorm.com.ng/main.php";</script>';
	} -->
    ?>