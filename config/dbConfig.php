<?php


 $un = 'regis';
 $pw = "hjee8";
 $sv = 'localhost';
 $db = 'media';
 
 function getDBconnect($sv, $un, $pw, $db){
    $conn = new mysqli($sv, $un, $pw, $db);
 
    if($conn ->connect_errno){
        exit("DATAbase Connection Failed. Reason: ".$conn->connect_error);
    }
    
    return $conn;
 }
 
 ?>