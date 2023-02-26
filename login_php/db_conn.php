<?php

$cname = "localhost";
$uname= "root";
$password ="";

$db_name = "test_db";

$conn = mysqli_connect($cname, $uname,$password, $db_name);

if(!$conn){
    echo  "Connection Failed";
}