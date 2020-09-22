<?php
require "db.php";
if(isset($_COOKIE['EmailUser']))
{
$email=$_COOKIE['EmailUser'];
$password =  $_POST['oldPass'];
$newPass=$_POST['newPass'];
$newPassV = $_POST['newPassV'];
if(strlen($newPass)<5){
    header("Location:changePass.php?status=small");

  }
  else if($newPass!==$newPassV)
  {
    header("Location:changePass.php?status=notMatch");
  }
else{
$resultset = $conn->query("Select * FROM users WHERE Email = '$email' and password='$password' LIMIT 1");
if($resultset->num_rows !=0)
{
    $sql = "UPDATE `users` SET`password`='$newPass' WHERE `Email` = '$email' and `password`='$password'";
    if($conn->query($sql))
    {
        header("Location:Sign_in.php?status=passChanged");
    }
    else{
        header("Location:Sign_in.php?status=failed");
    }
    $row = $resultset-> fetch_assoc();
    $vkey = $row['vkey'];

}
else {
    header("Location:Sign_in.php?status=failed");
}

}
}

?>
