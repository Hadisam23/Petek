<?php
require_once "db.php";

$email= htmlspecialchars($_POST['email']);
$userName = htmlspecialchars($_POST['usrnm']);
$phone = htmlspecialchars($_POST['phn']);
$emailver = htmlspecialchars($_POST['emailver']);
$vkey = $_POST['vkey'];
if(strlen($userName) < 5)
  {
    header("Location: Regist.php?status=failUser");
    die();
  }
  elseif($email!=$emailver)
  {
    header("Location: Regist.php?status=failEmail");
    die();
  }
echo $vkey;
$sql = "INSERT INTO `users`(`Email`, `UserName`, `phone`, `vkey`) VALUES ('$email','$userName','$phone','$vkey')";
if($conn->query($sql))
{
    setcookie("email",$email);
    echo "user was added succeffully";
    $to= $email;
    $subject = "Email Verification";
    $url = "http://localhost/hw3/verify.php?vkey=$vkey";
    $message = "<a href=$url>Verify Email</a>";
    $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to,$subject,$message,$headers);
    header("Location:thankyou.php");
    
}
else{
    header("Location: Regist.php?status=fail");
    
}

$conn->close();

?>
