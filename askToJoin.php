<?php
require_once "db.php";
$holder =  $_GET['holder'];

$sender =  $_COOKIE['EmailUser'];

$to= $holder;
$subject = "Family Join Request";
$url = "http://localhost/hw3/viewRequest.php?sender=$sender&holder=$holder";
$message = "<a href=$url>$sender asked to join your family,in order to add them to your family, please click here.</a>";
$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$message,$headers);
header("Location:requestSent.php");   


$conn->close();

?>
