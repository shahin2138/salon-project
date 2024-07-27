<?php
session_start();
$uname = $_POST["uname"];
$pass = $_POST["pass"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "salon";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    echo "DB not connected!" . mysqli_connect_error();
}
$sql = "SELECT * FROM `adminlog` WHERE `username` = '$uname' AND `password` = '$pass';";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    $_SESSION["uname"] = $uname;
    $_SESSION["pass"] = $pass;
    header("Location:admindash.php");
} else {
    header("Location:error.html");
}
mysqli_close($conn);
?>