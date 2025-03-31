<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    echo " tera tu ta ta database a ne connect hoya";
} else {
    $sql = 'CREATE DATABASE user_info';
    if (mysqli_query($conn, $sql)) {
        echo "table created";
    } else " something wrong!";
}
