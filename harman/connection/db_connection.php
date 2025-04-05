<?php 
//connection file 

$servername= "localhost"; //by default servername
$password= ""; // no space here
$username="root"; //by default username
$dbname= "authentication"; //database name

$conn = mysqli_connect($servername,$username,$password,$dbname); //check connection

// if($conn){
//     echo "Connected..!";
// }else{
//     echo "Not Connected";
// }

?>