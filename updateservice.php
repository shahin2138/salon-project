<?php

$id = $_POST["id"];
$name = $_POST["name"];
$therapy = $_POST["therapy"];
$description = $_POST["description"];
$mrp = $_POST["mrp"];


$conn = mysqli_connect("localhost", "root", "", "salon");

if (!$conn) {
    echo "Database not connected" . mysqli_connect_error();
}


$sql = "UPDATE `services` SET `name` = '$name', `therapy` = '$therapy', `description` = '$description', `mrp` = '$mrp' WHERE `services`.`id` = $id;";

if (mysqli_query($conn, $sql)) {
    header("Location:manageservice.php");
} else {
    echo "something went wrong";
}


mysqli_close($conn);



?>