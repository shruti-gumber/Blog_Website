<?php
session_start();
include("config.php");

$category = $_GET['type'];

$sql = "SELECT * FROM blogs
WHERE category='$category'
AND status='approved'
ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo ucfirst($category); ?> Blogs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="heading">
    <?php echo ucfirst($category); ?> Blogs
</h1>

<?php

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){
?>

<div class="blogBox">

    <h2><?php echo $row['title']; ?></h2>

    <p style="color:gray; margin:8px 0;">
✍️ By :
<b>
<?php echo $row['user_name']; ?>
</b>
</p>

    <p><?php echo $row['content']; ?></p>

    <br>

    <small>
        Category :
        <?php echo ucfirst($row['category']); ?>
    </small>

    <br><br>

    <?php

    $likes = $row['likes'];
    $dislikes = $row['dislikes'];

    $totalVotes = $likes + $dislikes;

    if($totalVotes>=10){
        $creadibility = ($likes/$totalVotes)*100;
    }
    else{
        $creadibility = ($likes * 10);
    }
    
    if($creadibility > 100){
        $creadibility = 100;
    }

    ?>

    <p>👍 Likes : <?php echo $likes; ?></p>

    <p>👎 Dislikes : <?php echo $dislikes; ?></p>

    <p>⭐ Credibility Score : <?php echo round($creadibility); ?>%</p>

<?php

if($totalVotes < 5){
    echo "<p style='color:#1e73be;
    font-weight:bold;'>
    ⭐ Yet To Be Rated
    </p>";
}
elseif($creadibility >= 80)
{
    echo "<p style='color:green;
    font-weight:bold;'>
    Trusted ✅
    </p>";
}
elseif($creadibility >= 50)
{
    echo "<p style='color:orange;
    font-weight:bold;'>
    Neutral ⚠️
    </p>";
}
else
{
    echo "<p style='color:red;
    font-weight:bold;'>
    Untrusted ❌
    </p>";
}

?>

    <br>

    <a href="like.php?id=<?php echo $row['id']; ?>" class="btn">
        Like
    </a>

    <a href="dislike.php?id=<?php echo $row['id']; ?>" class="btn">
        Dislike
    </a>

    <?php

    if(
   (isset($_SESSION['user_id']) &&
   $_SESSION['user_id']==$row['user_id'])
   ||
   isset($_SESSION['admin'])
)

{
    ?>

    <a href="delete_blog.php?id=<?php echo $row['id']; ?>"
       class="btn deleteBtn">
       Delete
    </a>

    <?php
    }
    ?>

</div>

<?php
} // while loop close

} // if condition close

else{
    echo "<h2 style='text-align:center;'>No Blogs Found</h2>";
}
?>

</body>
</html>