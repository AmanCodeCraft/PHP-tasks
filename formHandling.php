<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registration Form</h1>
    <form action="./formHandling.php" method="post">
        <input type="text" name="name" placeholder="Enter your name.."><br><br>
        <input type="number" name="rollno" placeholder="Enter your rollno.."><br><br>
        <input type="text" name="mail" placeholder="Enter your mail id.."><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['rollno'];
    echo $_POST['mail'];
}
?>