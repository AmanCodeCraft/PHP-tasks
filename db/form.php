<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <style>
        /* Center the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form container */
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 330px;
            text-align: center;
        }

        /* Heading */
        h1 {
            margin-bottom: 15px;
            color: #333;
        }

        /* Input fields */
        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* File input styling */
        input[type="file"] {
            border: none;
        }

        /* Submit button */
        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form action="./insert.php" method="post" enctype="multipart/form-data">
        <h1>SIGN IN FORM</h1>
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="pass" placeholder="Enter password" required>
        <input type="text" name="address" placeholder="Enter your address" required>
        <input type="tel" name="phone" placeholder="Enter your phone number" required>

        <label for="file">Upload your image:</label>
        <input type="file" id="file" name="file" required>

        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>