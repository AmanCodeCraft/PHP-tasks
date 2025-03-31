<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_info";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo " tu ta ta database a ne connect hoya";
}


$fetch = "SELECT first_table.user_name,first_table.pass,sec_table.phone,first_table.email,sec_table.addres FROM first_table  JOIN sec_table ON 
first_table.phone= sec_table.phone";
$result = mysqli_query($conn, $fetch);
// print_r ($result);
while ($resultt = (mysqli_fetch_assoc($result))) {
    echo $resultt['user_name'] . "<br>";
    echo $resultt['email'] . "<br>";
    echo $resultt['pass'] . "<br>";
    echo $resultt['addres'] . "<br>";
    echo $resultt['phone'] . "<br>";
}
