<?php


    $userid= $_COOKIE["dormuserid"];

$page= $_COOKIE['dormpage'];
$tokenid =$_COOKIE['dormtoken'];
 echo $userid.$tokenid.$page;
 
if($page=="studytools.html"){
    
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







?>




