<?php

include("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_messages
(name,email,subject,message)
VALUES
('$name','$email','$subject','$message')";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Message Sent Successfully');
    window.location='index.php';
    </script>";
}
else
{
    echo "Error";
}

?>