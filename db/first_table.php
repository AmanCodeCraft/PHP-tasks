<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_info";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo " tera tu ta ta database a ne connect hoya";
} else {
    $sql = 'CREATE TABLE first_table(
    id INT(3) UNSIGNED AUTO_INCREMENT UNIQUE,
    phone INT(10) PRIMARY KEY,
    user_name TEXT(20),
    email VARCHAR(50),
    pass VARCHAR(300)
    )';
    if (mysqli_query($conn, $sql)) {
        echo "table created";
    } else {
        echo "something wrong!";
    }
}
