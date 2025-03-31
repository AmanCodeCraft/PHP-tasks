<?php
$servername="localhost";
$username="root";
$password="";
$dbname="user_info";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
echo"salya tera tu ta ta database a ne connect hoya";
}
else{
    $sql='CREATE TABLE sec_table(
    id INT(3) UNSIGNED AUTO_INCREMENT UNIQUE,
    phone INT(10) PRIMARY KEY,
    FOREIGN KEY(phone) REFERENCES first_table(phone),
    addres VARCHAR(110),
    filee VARCHAR(300)
    )';
    if(mysqli_query($conn,$sql)){
        echo"table created";
    }
    else{
        echo"fuddu kamm ho gya";
    }
}
?>