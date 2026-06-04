<?php

include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(username,email,password)
VALUES('$name','$email','$password')";

mysqli_query($conn,$sql);

header("Location: login.php");

?>