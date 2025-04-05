<?php
require '../connection/db_connection.php';

session_start();

if (!($_SESSION['user_id'])) {
    header('Location:../authentication/login.php');
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM details WHERE id='$user_id'";

$result = mysqli_query($conn, $sql);

$row = mysqli_num_rows($result);

if ($row > 0) {
    $data = mysqli_fetch_assoc($result);
    $name = $data['name'];
    $phone = $data['phone'];
    $address = $data['address'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update details</title>
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
        <form action="insert.php" method="post">
            <h2>Update Details</h2>
            <p>If you want to change your details then go on...</p>
            <input type="email" name="email" placeholder="Email id.." value="<?php echo $_SESSION['email']; ?>"><br>
            <input type="text" name="name" placeholder="Enter Your name.." value="<?php echo $name ?>" ><br>
            <input type="text" name="address" placeholder="Enter Your address.." value="<?php echo $address ?>" ><br>
            <input type="number" name="phone" placeholder="Enter Your pho no." value="<?php echo $phone ?>" ><br>
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {       // check button in clicked or not

    $email = $_POST['email'];          //store values in variables
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $user_id = $_SESSION['user_id'];   //get id from session 

    $sql1 = "UPDATE login SET email ='$email', action=1 WHERE id ='$user_id'";  //update krna new data
    $sql2 = "UPDATE login SET name ='$name',address ='$address',phone ='$phone' action=1 WHERE id ='$user_id'";

    $result = mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2);    //check query or connection works or no

    if ($result) {
?>
        <script>
            alert("Update Successful...!");
            window.open("../details/show.php");
        </script>
<?php
    }
}
?>