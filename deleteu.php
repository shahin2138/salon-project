<?php
$id = $_GET["id"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "salon";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    echo "DB not connected!";
}
$sql = "DELETE from users where id=$id";
if (mysqli_query($conn, $sql)) {
    header("Location:usersmanage.php");
} else {
    echo "something went wrong!!";
}
mysqli_close($conn);
?>