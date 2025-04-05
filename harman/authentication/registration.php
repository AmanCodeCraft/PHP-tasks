<?php
require '../connection/db_connection.php'; // file da hone bhot jruri a!
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        div {
            text-align: center;
        }

        input {
            outline: none;
            margin: 5px;
        }
    </style>
</head>

<body>
    <div>
        <form action="registration.php" method="post">
            <h2>Registration new ID</h2>
            <input type="email" name="email" placeholder="Email id.." required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="submit">Submit</button>
            <p>If you have already account <a href="../authentication/login.php">login</a><br></p>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {  // check button in clicked or not

    $email = $_POST['email'];   //store values in variables
    $password = $_POST['password'];

    $sql = "INSERT INTO login(email,password,action) VALUES('$email','$password','0')"; //data insert krna

    if (mysqli_query($conn, $sql)) {  //query chli ja nhi check krna

?>
        <script>
            alert("Your new id created!");
            window.open("login.php");
        </script>
<?php
    }
}
?>