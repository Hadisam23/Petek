<?php require "db.php";

if(isset($_GET['holder']))
{
    //proccess verification
    $holder=$_GET['holder'];
    $sender=$_GET['sender'];
    $sql = "INSERT INTO `families`(`HolderMail`, `FamilyMember`) VALUES ('$holder','$sender')";
if($conn->query($sql))
{
    
    $to= $sender;
    $subject = "Family Request Acceptance";
    $url = "http://localhost/hw3/family.php";
    $message = "<a href=$url>Your Request to join $holder family was accepted</a>";
    $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to,$subject,$message,$headers);
    header("Location:index.php");
    
}
else{
    header("Location:family.php?status=fail");
}
   
}