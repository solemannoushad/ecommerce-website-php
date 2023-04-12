<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Mobi_Men";

$connection = mysqli_connect($servername,$username,$password,$database);
if(!$connection){
    die("Failed to connect");
}


?> 