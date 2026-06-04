<?php

session_start();
include("config.php");

$user_id = $_SESSION['user_id'];
$blog_id = $_GET['id'];

$check = mysqli_query($conn,
"SELECT * FROM votes
WHERE user_id='$user_id'
AND blog_id='$blog_id'");

if(mysqli_num_rows($check)==0)
{
mysqli_query($conn,
"INSERT INTO votes(user_id,blog_id,vote_type)
VALUES('$user_id','$blog_id','dislike')");

mysqli_query($conn,
"UPDATE blogs
SET dislikes=dislikes+1
WHERE id='$blog_id'");
}

header("Location:".$_SERVER['HTTP_REFERER']);

?>