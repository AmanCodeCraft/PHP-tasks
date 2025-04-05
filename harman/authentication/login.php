<?php
require '../connection/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
        <form action="login.php" method="post">
            <h2>Login Form</h2>
            <input type="email" name="email" placeholder="Email id.." required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="submit">Submit</button>
            <p>Create new account<a href="../authentication/registration.php">  New Registration</a><br></p>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {       // check button in clicked or not

    $email = $_POST['email'];          //store values in variables
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";  //check krna v password database wale nal match krda ja nhi 

    $result = mysqli_query($conn, $sql);        //check query or connection works or not

    $row = mysqli_num_rows($result);      //data get into row

    if ($row > 0) {           //query chli ja nhi check krna
        $assoc_arr = mysqli_fetch_assoc($result);   // make associative array

        session_start();                       //session start here

        $_SESSION['user_id'] = $assoc_arr['id'];   // get user id, mail, password into session
        $_SESSION['email'] = "$email";
        $_SESSION['password'] = "$password";
?>
        <script>
            alert("Login Successful...!");
            window.open("../management/insert.php");
        </script>
<?php
    } else {
        ?>
        <script>
            alert("Invalid id...!");
            window.open("./login.php");
        </script>
<?php
    }
}
?>