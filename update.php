<?php
require("db.php");
if( (isset($_POST["ver"])))
{
    //proccess verification
    $vkey=$_POST["ver"];
}
if(isset($_POST['PassWord'])){
    
    $pass = htmlspecialchars($_POST['PassWord']);
    $passVer = htmlspecialchars($_POST['passver']);
    if(strlen($pass)<5){
    header("Location:password.php?status=smalll&vkey=$vkey");
    }
   else if($pass!==$passVer)
  {
    header("Location:password.php?status=notMatchh&vkey=$vkey");
  }
else{
    echo $vkey;
    $resultSet = $conn->query("SELECT Email,vkey FROM `users` WHERE  vkey = '$vkey' LIMIT 1");
    echo $resultSet->num_rows;
    if($resultSet->num_rows >0)
    {
        //Validate Email
        $row = $resultSet-> fetch_assoc();
        $email = $row['Email'];
        
        $update = $conn->query("UPDATE `users` SET`password`='$pass' WHERE `Email` = '$email'");
        if($update)
        {
            echo "Your account is now verified, Congrats!!.";
            set_time_limit(5);
            header("Location:Sign_in.php?status=passChanged");
            
        }
        else{
            $conn->error;
        }
        

    
    
    }
    else {
        $conn->error;
    }

}}
?>