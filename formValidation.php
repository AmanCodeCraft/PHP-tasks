<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        form {
            text-align: center;
        }

        input {
            outline: none;
        }
    </style>
</head>

<body>
    <form action="formValidation.php" method="post">
        <h2>Registration Form Validation</h2>
        <input type="text" placeholder="Enter your name: " name="userName">
        <input type="number" placeholder="Enter your rollNo: " name="rollNo">
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userName = $_POST['userName'];
    $rollNo = $_POST['rollNo'];
    if (empty($userName) || empty($rollNo)) {
        echo "Fill all Fields pls....!";
    } else {
        echo $_POST['userName'];
        echo $_POST['rollNo'];
    }
}
?>