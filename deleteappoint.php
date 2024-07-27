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
$sql = "DELETE from appointments where id=$id";
if (mysqli_query($conn, $sql)) {
    header("Location:history.php");
} else {
    echo "something went wrong!!";
}
mysqli_close($conn);
?>