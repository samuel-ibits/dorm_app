<?php 
$cookie_name1="dormuserid";
$cookie_name2="dormtoken";
$page=$_COOKIE[$cookie_name2];
if($_COOKIE[$cookie_name1]!=="" and $_COOKIE[$cookie_name2]!==""){
    header("Location: ".$page);
}
?>