<?php
require "db.php";
if(isset($_POST['EmailUser']))
{
$email =  $_POST['EmailUser'];
$resultset = $conn->query("Select * FROM users WHERE Email = '$email' LIMIT 1");
if($resultset->num_rows !=0)
{
    $row = $resultset-> fetch_assoc();
    $vkey = $row['vkey'];
}
echo $vkey;

$to= $email;
$subject ="Password Reset";
$url = "http://localhost/hw3/passChange.php?vkey=$vkey";
$message = "<a href=$url>Click here to reset your password</a>";
$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$message,$headers);
header("Location:thankyou.php");
}
?>