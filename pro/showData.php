<?php

require 'connection.php';

session_start();

if (!($_SESSION['id'])) {
    header('Location:loginForm.php');
}

$my_id=$_SESSION['id'];

$sql = "SELECT * FROM ashu WHERE id='$my_id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo  $row['id'] . "<br>";
        echo  $row['name'] . "<br>";
        echo  $row['mail_id'] . "<br>";
        echo  $row['pass'] . "<br>";
    }
} else {
    echo "No Records...!";
}

echo '<a href="logout.php">Logout</a>';
