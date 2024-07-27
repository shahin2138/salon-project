<?php 
$name=$_POST["name"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];


$servername="localhost";
$username="root";
$password="";
$db="salon";
$conn=mysqli_connect($servername,$username,$password,$db);
if (!$conn) {
    echo"DB not connected!". mysqli_connect_error();
}
$sql="INSERT INTO `users` (`id`, `name`,  `username`,`email`,  `password`) VALUES (NULL, '$name',  '$uname','$email', '$pass');";
if (mysqli_query($conn,$sql)) {
    header("Location:login.html");
} else {
    header("Location:error.html");
}
 mysqli_close($conn);
?>