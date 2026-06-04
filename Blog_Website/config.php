<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"blog_db",3307
);

if(!$conn){
die("Connection Failed");
}

?>