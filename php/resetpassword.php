
<?php 
header("Content-Type:application/json");

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
   

function response($userid,$response_desc,$response_code){
	$response['userid'] = $userid;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;
}


$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$userid=$_SESSION['userid'];
	$id=$_SESSION['idd'];
		if ($oldpass==$newpass){

            
        }



 ?>