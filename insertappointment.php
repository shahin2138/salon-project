<?php
$name = $_POST["name"];
$email = $_POST["email"];
$mob = $_POST["mob"];
$msg = $_POST["msg"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "salon";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    echo "DB not connected!" . mysqli_connect_error();
}
$sql = "INSERT INTO `appointments` (`id`, `name`,  `email`,`mob`, `msg`) VALUES (NULL, '$name',  '$email','$mob', '$msg');";
if (mysqli_query($conn, $sql)) {
    header("Location:thanksappoint.html");
} else {
    header("Location:error.html");
}
mysqli_close($conn);
?>