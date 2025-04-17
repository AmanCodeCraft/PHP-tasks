<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = $_GET['name'];
    $sql = "SELECT * FROM user WHERE name='$name'";
    $result = mysqli_query($conn,$sql);
    if($result){
        if($data = mysqli_fetch_assoc($result)){
             echo $data['email'];
        }
        else{
            echo "no data found";
        }
    }
    else{
        echo "error";
    }
}

mysqli_close($conn);