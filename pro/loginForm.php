<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input, button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            background:rgb(59, 113, 200);
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #90caf9;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="loginForm.php" method="post">
            <h2>Login Form</h2>
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="password" name="pass" placeholder="Enter your password" required>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>

</html>
