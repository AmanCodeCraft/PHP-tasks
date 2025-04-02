<?php
require 'connection.php';

if ($conn->connect_error) {
    echo "<p>DB Connection failed: " . $conn->connect_error . "</p>";
} else {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mail_id = $_POST['mail'];
        $pass = $_POST['pass'];

        $sql = "INSERT INTO ashu(name, mail_id, pass) VALUES('$name', '$mail_id', '$pass')";

        if (mysqli_query($conn, $sql)) {
?>
            <script>
                alert("WELL DONE YOU ARE  REGUSTERED SUCCESSFULLY");
                window.location.href = './loginForm.php';
            </script>
<?php

        } else {
            echo "<p>Data is not inserted..!</p>";
        }

        // Creating session here..!
        // session_start();
        // $_SESSION['mail'] = $mail_id;
        // $_SESSION['password'] = $pass;

    }
}
?>