<?php

setcookie("dormuserid", "", time() + (86400 * 30), "/");

setcookie("dormpage", "", time() + (86400 * 30), "/");

setcookie("dormtoken", "", time() + (86400 * 30), "/");
if($_COOKIE["dormpage"]==""){
Echo '<script type="text/Javascript">window.location.href ="https://app.dorm.com.ng/studytools.php";</script>';
}
?>