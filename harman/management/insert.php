<?php
require '../connection/db_connection.php';

session_start();

if (!($_SESSION['user_id'])) {
    header('Location:../authentication/login.php');
}

$user_id = $_SESSION['user_id'];   //get id from session 

$sql = "SELECT action FROM login WHERE id = '$user_id'";

$result = mysqli_query($conn, $sql);

$assoc_arr = mysqli_fetch_assoc($result);

$action = $assoc_arr['action'];

if ($action == 1) {
?>
    <script>
        alert("already filled!");
    </script>
<?php
    header('Location:../details/show.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
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
            <h2>Fill Your details</h2>
            <input type="email" name="email" placeholder="Email id.." value="<?php echo $_SESSION['email']; ?>"><br>
            <input type="text" name="name" placeholder="Enter Your name.."><br>
            <input type="text" name="address" placeholder="Enter Your address.."><br>
            <input type="number" name="phone" placeholder="Enter Your pho no."><br>
            <button type="submit" name="submit">Submit</button>
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


    $sql1 = "UPDATE login SET email ='$email',action=1 WHERE id ='$user_id'";  //update krna new data

    $sql2 = "INSERT INTO details(user_id,name,phone,address) VALUES('$user_id','$name','$phone','$address')";   //insert new data into new table

    $result = mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2);    //check query or connection works or no

    if ($result) {
?>
        <script>
            alert("Fill Details Successful...!");
            window.open("../details/show.php");
        </script>
<?php
    }
}
?>