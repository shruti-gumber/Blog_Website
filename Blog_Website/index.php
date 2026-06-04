<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BlogBurst</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

<!-- DARK MODE BUTTON -->

<button id="darkBtn" class="darkBtn">
🌙 Dark Mode
</button>

<!-- NAVBAR -->

<nav class="navigation">

<div class="logo">
<img src="logo.jpg" alt="Logo">
<span>BlogBurst</span>
</div>

<div class="navLinks">

<a href="index.php">Home</a>
<a href="#about">About</a>
<a href="#blogs">Blogs</a>
<a href="#contact">Contact</a>

<?php

if(isset($_SESSION['user']))
{
echo '<a href="add_blog.php" class="btn">Write Blog</a>';
echo '<a href="logout.php" class="btn">Logout</a>';
}
else
{
echo '<a href="login.php" class="btn">Login</a>';
}

?>

</div>

</nav>

<!-- BANNER -->

<section class="banner">

<div class="bannerThought">

<h1>
<span>Discover</span> & Share Your Thoughts
</h1>

<p>
Our platform allows users to write, share and explore blogs.
You can express your ideas and also check the credibility of content based on user reactions.
</p>

<a href="#blogs" class="btn">
Explore Blogs
</a>

</div>

<div class="bannerImg">

<img src="https://images.pexels.com/photos/6147028/pexels-photo-6147028.jpeg"
alt="Banner Image">

</div>

</section>

<!-- ABOUT -->

<h1 class="heading">About Us</h1>

<div class="aboutUs" id="about">

<div class="aboutImg">

<img src="https://images.pexels.com/photos/3182763/pexels-photo-3182763.jpeg"
alt="About Image">

</div>

<div class="aboutContent">

<p>
<span>About Our Platform</span>
<br><br>
This blog website is designed to allow users to express their ideas,
experiences and knowledge through writing blogs.
</p>

<br>

<p>
Our main feature is the credibility system where users can like or dislike posts.
</p>

<br>

<p>
This platform encourages responsible sharing of information and helps readers identify trustworthy content.
</p>

</div>

</div>

<!-- BLOGS -->

<div class="recentblogs" id="blogs">

<h1 class="heading">
Blog Categories
</h1>

<div class="blogsDiv">

<!-- FOOD -->
<div class="individualRecentBlogs">

<img src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg">

<div class="recentBlogContent">

<h4>Food Blogs</h4>

<p>Share and explore delicious recipes.</p>

<a href="category.php?type=food" class="btn">
Read More
</a>

</div>

</div>

<!-- TRAVEL -->
<div class="individualRecentBlogs">

<img src="https://images.pexels.com/photos/21014/pexels-photo.jpg">

<div class="recentBlogContent">

<h4>Travel Blogs</h4>

<p>Explore amazing travel experiences.</p>

<a href="category.php?type=travel" class="btn">
Read More
</a>

</div>

</div>

<!-- TECH -->
<div class="individualRecentBlogs">

<img src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg">

<div class="recentBlogContent">

<h4>Technology Blogs</h4>

<p>Latest updates in technology.</p>

<a href="category.php?type=tech" class="btn">
Read More
</a>

</div>

</div>

<!-- HEALTH -->
<div class="individualRecentBlogs">

<img src="https://images.pexels.com/photos/4056723/pexels-photo-4056723.jpeg">

<div class="recentBlogContent">

<h4>Health Blogs</h4>

<p>Fitness and wellness tips.</p>

<a href="category.php?type=health" class="btn">
Read More
</a>

</div>

</div>

<!-- EDUCATION -->
<div class="individualRecentBlogs">

<img src="https://images.pexels.com/photos/5212648/pexels-photo-5212648.jpeg">

<div class="recentBlogContent">

<h4>Education Blogs</h4>

<p>Study tips and learning resources.</p>

<a href="category.php?type=education" class="btn">
Read More
</a>

</div>

</div>

<!-- LIFESTYLE -->
<div class="individualRecentBlogs">

<img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg">

<div class="recentBlogContent">

<h4>Lifestyle Blogs</h4>

<p>Daily life and personal growth.</p>

<a href="category.php?type=lifestyle" class="btn">
Read More
</a>

</div>

</div>

</div>

</div>

<!-- CONTACT -->

<h1 class="heading">
Contact Us
</h1>

<div class="contactUs" id="contact">

<div class="contactImg">

<img src="https://images.pexels.com/photos/7682206/pexels-photo-7682206.jpeg">

</div>

<div class="contactForm">

<form action="contact_save.php" method="POST">

<h2>Get In Touch</h2>

<div class="contactInfo">

<div class="infoBox">
<i class="fas fa-map-marker-alt"></i>
<h4>Address</h4>
<p>Haldwani, Uttarakhand</p>
</div>

<div class="infoBox">
<i class="fas fa-envelope"></i>
<h4>Email</h4>
<p>support@blogburst.com</p>
</div>

<div class="infoBox">
<i class="fas fa-phone"></i>
<h4>Phone</h4>
<p>+91 9876543210</p>
</div>

</div>


<input type="text" name="name" placeholder="Enter Name" required
minlength="3"
maxlength="50"
pattern="[A-Za-z ]+"
title="Only letters and spaces allowed">

<input type="email" name="email" placeholder="Enter Email" required
pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
title="Enter a valid email address">

<input type="text" name="subject" placeholder="Enter Subject" required
minlength="5"
maxlength="100">

<textarea name="message" placeholder="Enter Message" required
minlength="10"
maxlength="1000"></textarea>

<div class="formBtns">

<button type="submit" class="btn">
Submit
</button>

<button type="reset" class="btn">
Reset
</button>

</div>

</form>

</div>

</div>

<!-- DARK MODE SCRIPT -->

<script>

let btn = document.getElementById("darkBtn");

btn.onclick = function(){

document.body.classList.toggle("dark");

if(document.body.classList.contains("dark"))
{
localStorage.setItem("theme","dark");
}
else
{
localStorage.setItem("theme","light");
}

}

if(localStorage.getItem("theme")=="dark")
{
document.body.classList.add("dark");
}

</script>

</body>
</html>