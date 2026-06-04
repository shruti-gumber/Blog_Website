<?php

session_start();

include "config.php";

$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];


$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user'];

$sql = "INSERT INTO blogs
(title,content,category,user_id,user_name,status)
VALUES
('$title','$content','$category',
'$user_id','$user_name','pending')";

if(mysqli_query($conn,$sql))
{
    echo "
    <script>
    alert('Blog submitted successfully and sent for admin approval!');
    </script>
    ";
}
else
{
    echo "
    <script>
    alert('Error while submitting blog!');
    </script>
    ";
}
header("Location:index.php");

?>