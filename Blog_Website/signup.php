<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="formContainer">

<form action="signup_process.php" method="POST">

<h2>Create Account</h2>

<input type="text" name="name" placeholder="Enter name" required>

<input type="email" name="email" placeholder="Enter Email" required>

<input type="password" name="password" placeholder="Enter Password" required>

<input type="submit" value="Signup" class="btn">

<p>
Already have an account?
<a href="login.php">Login</a>
</p>

</form>

</div>

</body>
</html>