<?php


    $userid= $_COOKIE["dormuserid"];

$page= $_COOKIE['dormpage'];
$tokenid =$_COOKIE['dormtoken'];
 
if($page=="studytools.html"){
    include '../css/coursereview.css';
    include '../coursereview.html';
    

}

if($page=="review"){
    
    include 'studytools.html';

}
 

if($page=="texter"){
    
    include 'studytools.html';

}

if($page=="acommodia"){
    
    include 'studytools.html';

}


if($page=="market"){
    
    include 'studytools.html';

}







?>




