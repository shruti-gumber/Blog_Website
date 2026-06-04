<?php

include("config.php");
$sql = "SELECT * FROM blogs
WHERE status='pending'";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="adminContainer">

<h1 class="adminHeading">
Admin Panel
</h1>

<p class="adminSubHeading">
Pending Blogs For Approval!!
</p>
<br>
<span class="pendingBadge">
🟠 Pending Review
</span>

<br><br>
<?php

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{
?>

<div class="adminBlogCard">

<div class="adminTop">

<h2>
<?php echo $row['title']; ?>
</h2>


</div>

<p class="adminAuthor">
By :
<b>
<?php echo $row['user_name']; ?>
</b>
</p>

<p class="adminContent">
<?php echo $row['content']; ?>
</p>

<br>

<div class="adminBtns">

<a href="approve.php?id=<?php echo $row['id']; ?>"
class="btn approveBtn">
Approve
</a>

<a href="reject.php?id=<?php echo $row['id']; ?>"
class="btn rejectBtn">
Reject
</a>

</div>

</div>

<?php
}

}
else
{
echo "<h2 class='noBlogs'>
No Pending Blogs
</h2>";
}

?>

</div>

</body>

</html>