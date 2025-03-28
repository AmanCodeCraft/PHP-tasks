<?php
session_start();
$cookie_name = "user";
$cookie_value = "amni";
setcookie($cookie_name, $cookie_value, time() + 3000); // Commented out
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["user"])) {
        echo "Cookie Name: " . $cookie_name . "<br>";
        echo "Cookie Value: " . $_COOKIE["user"] . '<br>';
        if (isset($_SESSION["id"])) {
            echo "session id is: " . $_SESSION["id"];
        } else {
            echo "session is not set...!";
        }
    } else {
        echo "Cookie is not set..! Refresh the page.";
    }
    ?>
</body>

</html>