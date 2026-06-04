<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="formContainer">

<form action="login_process.php" method="POST">

<h2>Login</h2>

<input type="email" name="email" placeholder="Enter Email" required>

<input type="password" name="password" placeholder="Enter Password" required>

<input type="submit" value="Login" class="btn">

<p>
Don't have an account?
<a href="signup.php">Signup</a>
</p>

</form>

</div>

</body>
</html>