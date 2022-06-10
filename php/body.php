<?php
if(!isset($_COOKIE[$dorm_tokinid])) {

$page=$_COOKIE['dormpage'];
$tokenid =$_COOKIE['dormtoken'];

if($page=="studytools"){

    include ../studytools.html;

}
if($page=="review"){
    
    include studytools.html;

}
 

if($page=="texter"){
    
    include studytools.html;

}

if($page=="acommodia"){
    
    include studytools.html;

}


if($page=="market"){
    
    include studytools.html;

}





}


?>




