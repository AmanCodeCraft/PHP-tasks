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
    echo"connect";
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $pass = ($_POST['pass']);
    $address = ($_POST['address']);
    $phone = ($_POST['phone']);
     $file = $_FILES['file'];
    

    $sql = "INSERT INTO first_table(user_name, email, pass,phone) VALUES ('$name','$email','$pass',$phone)";
    $sql1 = "INSERT INTO sec_table(addres, phone) VALUES ('$address','$phone')";
    if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1)){
        echo"data inserted";
    }
    else{
        echo"not inserted";
    }
}
else{
    echo"fuddu kamm ho gya koi";
}
?>