<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>

<body>
    <form action="file.php" method="post" enctype="multipart/form-data">
        <h2>File upload</h2>
        <input type="file" name="image">
        <input type="submit" value="uplaod">
    </form>
</body>

</html>

<?php
if (isset($_FILES['image'])) {
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];

    $hiden_name = md5($file_name);  // hiden name pejna database ch

    $result = move_uploaded_file($file_tmp, "images/" . $file_name);
    // First we pass temp file name, then destination with real name, 

    // Note: after folder name forward slash / is also important

    $sql = "INSERT INTO documents(profile_pic) VALUES ('$hiden_name')";

    // insert query, note here we insert only name of the file not full file...!

    $uploaded = mysqli_query($conn, $sql);  //check query run hoyi ja nhiii...!

    if ($uploaded && $result) {
        echo "file uploaded..!";
    } else {
        echo "File is not uploaded..!";
    }

    $sql1 = "SELECT * FROM documents";  // data get kita database toh

    $query = mysqli_query($conn, $sql1);

    $assoc_arr = mysqli_fetch_assoc($query);  // associative array di form ch convert kreya

    echo "<br><br>";

    echo '<img src="./images/' . $assoc_arr['profile_pic'] . '" alt="Image" width="400px">';

    // image hmesha img tag vich hi get krniyaa..!
}
?>