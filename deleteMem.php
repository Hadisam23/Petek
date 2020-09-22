<?php
require_once('db.php');
header('Content-Type: application');
$member=$_GET['member'];
$user=$_COOKIE['EmailUser'];
$sql = "DELETE FROM `families` WHERE `families`.FamilyMember='$member' and `families`.HolderMail='$user'";

if ($conn->query($sql)) {
   header("location:family.php?status=success&member=$member");
}else {
    header("Location:family.php?status=failed&member=$member");
    
}

$conn->close();