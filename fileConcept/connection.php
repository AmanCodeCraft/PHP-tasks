<?php

$servername="localhost";
$username="root";
$password=""; //no space here
$dbname="file_collection"; //database name

$conn= mysqli_connect($servername,$username,$password,$dbname); 

if($conn){
     echo "Connected..!";
}

?>