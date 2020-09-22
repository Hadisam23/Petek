<?php
session_start();
$_SESSION=array();
session_destroy();
header("Location:Sign_in.php");
if(isset($_COOKIE['EmailUser']) && !isset($_COOKIE['password']))
{
    unset($_COOKIE['EmailUser']);
    setcookie("EmailUser"," ",time()-60*24,"/");
    header("Location:Sign_in.php");
    exit;
}
if(isset($_COOKIE['EmailNumber']))
{
    unset($_COOKIE['EmailNumber']);
    setcookie("EmailNumber",$ran,time()-60*24);
    header("Location:Sign_in.php");
    exit;
}
?>