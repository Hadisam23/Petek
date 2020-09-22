<?php session_start();?>
<?php
require "db.php";
require "parts/header.php";
$ran = rand(0,1000);

if(isset($_SESSION['username']))
{
  $userName = $_SESSION['username'];
}
else{
  $userName = null;
}
// case 1, the user wants to sign in using email and password
if(isset($_POST['submit']))
{
$userName =  htmlspecialchars($_POST["EmailUser"]);
$_SESSION['username'] = $userName;
$password = htmlspecialchars($_POST["password"]);
$resultset = $conn->query("Select * FROM users WHERE Email = '$userName' AND password = '$password' LIMIT 1");
if($resultset->num_rows !=0)
{

  setcookie("EmailUser",$userName,time()+60*24,"/");
  $row = $resultset-> fetch_assoc();
  $verfied = $row['verified'];
  echo $verfied;
  $email = $row['Email'];
  if($verfied == 1)
  {//success
    header("Location: index.php");

  }
  else{
    //please verify
    header("Location: Sign_in.php?status=pleaseverify");
  
}

}else{
  header("Location: Sign_in.php?status=fail");
}



if(isset($_REQUEST['remember']))
$escapedRemember=htmlspecialchars($_POST["remember"]);

$cookie_time=60*60*24*30; //30 days
$cookie_time_Onset=$cookie_time+time();
if(isset($escapedRemember)){
  setcookie("password",$password,$cookie_time_Onset);
}
else{
  $cookie_time_fromOffset=time() - $cookie_time;
  setcookie("password",$password,$cookie_time_fromOffset);
}
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
    <title class="headF">Sign In</title>   
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="68">


  
    <section id="User" class="text-center  py-2">
        <div class="container">
        <br>
        <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="must"):?>
            <div class="alert alert-warning mt-3" role="alert"><strong>Please sign in to veiw Home page.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="passChanged"):?>
            <div class="alert alert-success mt-3" role="alert"><strong>Password changed successfully.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="pleaseverify"):?>
            <div class="alert alert-warning mt-3" role="alert"><strong>Please verify your email in order to log in.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
         
        <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="fail"):?>
            <div class="alert alert-danger mt-3" role="alert"><strong>Login Failed</strong><br>wrong username or password.</div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="failed"):?>
            <div class="alert alert-danger mt-3" role="alert"><strong>change password failed</strong><br>wrong password.</div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="memberAdded"):?>
            <div class="alert alert-success mt-3" role="alert">You've been added succefully to the family</div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="memberFailed"):?>
            <div class="alert alert-danger mt-3" role="alert"><strong>Login Failed</strong><br>Failed to add you</div>
          <?php endif; ?>
          <?php endif; ?>
          
          
          <h2 class="my-4"> Sign In</h2>
          
          <img id="regs" src="https://image.flaticon.com/icons/svg/875/875511.svg">
          <form  id="link" method="post" class="mx-auto">
            <div class="row text-left">
              <div class="form-group col-md-12">
                <label for="UserName">Email</label>
                <input
                  type="email"
                  name="EmailUser"
                  id="emailUser"
                  class="form-control"
                  placeholder="Enter Your Email"
                  aria-describedby=""
                  value="<?php if(isset($_COOKIE['EmailUser']))  echo $_COOKIE['EmailUser'] ?>"
                  required
                />
              </div>
              
              <div class="form-group col-md-12">
                <label for="userEmail">Password</label>
                <input
                  type="password"
                  name="password"
                  id="userPass"
                  class="form-control"
                  placeholder="Enter Your Password"
                  aria-describedby=""
                  value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>"
                />
              </div>
              <div class = "checkbox ml-3">
                <input name="remember" id="remember" type="checkbox" value="1"
                <?php if(isset($_COOKIE['password'])) {echo "checked='checked'";}?>
                >
                  <label for="remember">
                    Remember Me
                  </label>
             </div>
             
              <div  class="form-group col-md-12">
                <label for="userEmail"></label>
                <a :href="homepage4">Forgot Your Password?</a>
              </div>
              <div class="form-group col-md-12">
                <label for="userSignIn"></label>
                
                  <button class="btn btn-success mb-3" id="btn" type="submit" name="submit">Sign in</button>
              </div>
              <div class="form-group col-md-12">
                  
              </div>
              <div class="form-group col-md-12">
                <label for="userRegister"></label>
               
                <a  class="buttonLink" :href="homepage2">Sign Up</a></p>
                
              </div>
            </form>
            </section>
            
            <?php require "parts/footer.php"?>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/vue.js" type="text/javascript"></script>
    <script src="js/hw.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
  </body>
 
</html>