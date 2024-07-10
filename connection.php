<?php
$serverName="localhost";
$usernameDB="root";
$passDB="";
$DBName="template2_final";
$conn=mysqli_connect($serverName,$usernameDB,$passDB,$DBName);
if(!$conn){
    die('err DB:' . mysqli_connect_error());
}