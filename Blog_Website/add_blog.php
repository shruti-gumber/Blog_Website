<?php

session_start();

if(!isset($_SESSION['user']))
{
header("Location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Add Blog</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="formContainer">

<form action="save_blog.php" method="POST">

<h2>Add New Blog</h2>

<input type="text"
name="title"
placeholder="Enter Blog Title"
required>

<select name="category" required>

<option value="">Select Category</option>

<option value="food">Food</option>

<option value="travel">Travel</option>

<option value="tech">Technology</option>

<option value="health">Health</option>

<option value="education">Education</option>

<option value="lifestyle">Lifestyle</option>

</select>

<textarea
name="content"
placeholder="Write your blog here..."
required></textarea>

<input type="submit"
value="Post Blog"
class="btn">

</form>

</div>

</body>
</html>