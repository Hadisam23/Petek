<?php require "db.php";

if(isset($_GET['vkey']))
{
    //proccess verification
    $vkey=$_GET['vkey'];
   
    $resultSet = $conn->query("Select verified,vkey FROM users WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");
    if($resultSet->num_rows ==1)
    {
        //Validate Email
        $update = $conn->query("UPDATE users SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
        if($update)
        {
            echo "Your account is now verified, Congrats!!.";
            set_time_limit(5);
            header("Location:password.php?vkey=$vkey");
            
        }
        else{
            echo "something wnet wrong";
        }

    }
    else{
        echo "something wnet wrong";
        
    }

}
else{
    die("something went wrong");
}