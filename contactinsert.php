<?php
session_start();
if (!isset($_SESSION["usname"]) && !isset($_SESSION["upass"])) {
    header("Location:login.html");
}else{
$name = $_POST["name"];
$email = $_POST["email"];
$mob = $_POST["mob"];
$query = $_POST["query"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "salon";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    echo "DB not connected!" . mysqli_connect_error();
}
$sql = "INSERT INTO `contact` (`id`, `name`,  `email`,`mob`,  `query`) VALUES (NULL, '$name',  '$email','$mob', '$query');";
if (mysqli_query($conn, $sql)) {
    header("Location:thankscontactu.html");
} else {
    header("Location:error.html");
}
mysqli_close($conn);}
?>