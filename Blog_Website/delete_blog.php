<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM blogs WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location: " . $_SERVER['HTTP_REFERER']);

?>