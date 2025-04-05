<?php

require '../connection/db_connection.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!($_SESSION['user_id'])) {
    header('Location:../authentication/login.php');
}

$sql = "SELECT 
    login.email,
    login.password,
    details.user_id,
    details.name,
    details.phone,
    details.address
FROM 
    login 
JOIN 
    details 
ON 
    login.id = details.user_id
WHERE 
    login.id = '$user_id';";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo   "<h2>User details...!</h2>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "...................................<br><br>";
        echo "id: " .  $row['user_id'] . "<br>";
        echo  "name: " . $row['name'] . "<br>";
        echo  "email: " . $row['email'] . "<br>";
        echo  "address: " . $row['address'] . "<br>";
        echo  "phone: " . $row['phone'] . "<br>";
        echo "..................................";
        echo "<br>";
    }
} else {
    echo "No Records...!";
}

echo '<br><br><a href="../authentication/logout.php">Logout</a><br><br>';

echo '<a href="../management/update.php">Update</a><br>';
