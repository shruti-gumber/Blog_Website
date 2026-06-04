<?php

session_start();
include "config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE email='$email'
AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $user = mysqli_fetch_assoc($result);

    $_SESSION['user']=$user['username'];
    $_SESSION['user_id']=$user['id'];

    echo "
    <script>
    alert('Login Successful! Welcome ".$user['username']." 🎉');
    window.location='index.php';
    </script>
    ";
}
else
{
    echo "
    <script>
    alert('Invalid Email or Password!');
    window.location='login.php';
    </script>
    ";
}
?>