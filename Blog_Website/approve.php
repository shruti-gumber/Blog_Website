<?php

include("config.php");

$id=$_GET['id'];

mysqli_query($conn,
"UPDATE blogs
SET status='approved'
WHERE id='$id'");

header("Location:admin.php");

?>