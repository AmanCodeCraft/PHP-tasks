<?php
session_start();
$_SESSION["id"] = "ashu";
echo "session is set ..!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>

<body>
    <h1>Learning Sessions</h1>
    <?php
    echo "coookie value:  " . $_COOKIE['user'] . "<br>";
    echo "session id is: " . $_SESSION["id"];
    session_unset();
    session_destroy();
    ?>
</body>

</html>