<?php
$name = $_POST["name"];
$therapy = $_POST["therapy"];
$description = $_POST["description"];
$mrp = $_POST["mrp"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "salon";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    echo "DB not connected!" . mysqli_connect_error();
}
$sql = "INSERT INTO `services` (`id`, `name`,  `therapy`,`description`, `mrp`) VALUES (NULL, '$name',  '$therapy','$description', '$mrp');";
if (mysqli_query($conn, $sql)) {
    header("Location:manageservice.php");
} else {
    header("Location:error.html");
}
mysqli_close($conn);
?>