<?php require "db.php";
require "parts/header.php";

if( (isset($_GET['vkey'])))
{
    //proccess verification
    $vkey=$_GET['vkey'];
}
if(isset($_POST['PassWord'])){
    
    $pass = htmlspecialchars($_POST['PassWord']);
$passVer = htmlspecialchars($_POST['passver']);
if(strlen($pass)<5){
    header("Location:passChange.php?status=small&vkey=$vkey");

  }
  else if($pass!==$passVer)
  {
    header("Location:passChange.php?status=notMatch&vkey=$vkey");
  }
else{

    
    $resultSet = $conn->query("SELECT Email,vkey FROM `users` WHERE  vkey = '$vkey' LIMIT 1");
  
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
            echo "something wnet wrong here";
        }

    }
    else{
        echo "something wnet wrong there";
        
    }

}}

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
  <title>Password Screen</title>
  
</head>
<body ody data-spy="scroll" data-target=".navbar" data-offset="68">
    
    <section id="passForm" class="text-center text-black py-5">
    <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="small"):?>
            <div class="alert alert-warning" role="alert"><strong>Password Should Be At Least 5 Characters.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="notMatch"):?>
            <div class="alert alert-warning" role="alert"><strong>Your Passwords Does Not Match.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
    <form id = "formstyle" method="post"  >
        
        <h1 class = "headF">Password Activation</h1>
        
        <img id="regs" src="https://pngimage.net/wp-content/uploads/2018/06/username-and-password-icon-png-6.png">
        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input id="passw" class="input-field" type="password" placeholder="Password" name="PassWord" required>
          </div>
          <div class="input-container">
            <i class="fa fa-check icon"></i>
            <input id = "passVer" class="input-field" type="password" placeholder="Password Verification" name="passver" required>
          </div>
          <input type="hidden" name="hiddenUser" value ="<?php echo $user ?>">
          <input type="hidden" name="ver" value ="<?php echo $vkey ?>">
          <button type="submit" name = "submit" id="btn">Submit</button>
        </form> 
      </section>
    
      <?php require "parts/footer.php"?>
      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="js/hw.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>