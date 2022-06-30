<?php 

function isDigits($telephone, $minDigits, $maxDigits){
	
	if(is_numeric($telephone) and ($telephone>=$minDigits and $telephone<=$maxDigits)){
		return 1;
	}else{return 0;}
}

function isValidTelephoneNumber(string $telephone, int $minDigits = 9, int $maxDigits = 14): bool {
    if (preg_match('/^[+][0-9]/', $telephone)) { //is the first character + followed by a digit
        $count = 1;
        $telephone = str_replace(['+'], '', $telephone, $count); //remove +
    }
    
    //remove white space, dots, hyphens and brackets
    $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone); 

    //are we left with digits only?
    return isDigits($telephone, $minDigits, $maxDigits); 
}

function normalizeTelephoneNumber(string $telephone): string {
    //remove white space, dots, hyphens and brackets
    $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone);
    return $telephone;
}




// $data['email']=$_POST['email'];

$tel=$_POST['phone'];
if (isValidTelephoneNumber($tel)) {   
	 //normalize telephone number if needed
	$phone= normalizeTelephoneNumber($tel); //+91123456789
	 }else{
		$phone= $tel;
	 }
	

$pas=$_POST['pass'];
$repass=$_POST['repass'];
if ($pas==$repass ){
	$data['pass']=$_POST['pass'];}else{

        $err2="password does not match";
    }
	
 $data = '{ "email": "'.$_POST['email'].'", "fname": "'.$_POST['fname'].'" , "phone": "'.$phone.'", "uname": "'.$_POST['uname'].'", "pass": "'.$_POST['pass'].'" }';



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


curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);


$result=json_decode($resp);
setcookie("dormuserid", $result->userid, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie("dormtoken", $result->tokenid, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie("dormpage", "studytools.php", time() + (86400 * 30), "/"); // 86400 = 1 day
	
	if($result->response_code==200){
		header('Location: https://www.app.dorm.com.ng/studytools.php');
	}else{echo $err2.$result->response_code;
    }
	

?>

