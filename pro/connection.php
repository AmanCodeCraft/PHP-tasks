<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "amni";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 500px;
        }

        h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        p {
            font-size: 18px;
            font-weight: bold;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Database Connection Status</h2>
        <?php
        if ($conn->connect_error) {
            echo "<p>DB Connection failed: " . $conn->connect_error . "</p>";
        } else {
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $mail_id = $_POST['mail'];
                $pass = $_POST['pass'];

                $sql = "INSERT INTO ashu(name, mail_id, pass) VALUES('$name', '$mail_id', '$pass')";

                if (mysqli_query($conn, $sql)) {
                    echo "<p>DB Connected And Data inserted successfully..!</p>";
                } else {
                    echo "<p>Data is not inserted..!</p>";
                }

                // Creating session here..!
                session_start();
                $_SESSION['mail'] = $mail_id;
                $_SESSION['password'] = $pass;
            }
        }
        ?>
    </div>
</body>

</html>
