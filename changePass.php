<?php require "parts/innerHeader.php";



?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
    <title class="headF">Change Password</title>   
</head>
<body ody data-spy="scroll" data-target=".navbar" data-offset="68">
  
    <section id="User" class="text-center  text-black py-2">
        <div class="container">
        <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="small"):?>
            <div class="alert alert-warning mt-5" role="alert"><strong>Password Should Be At Least 5 Characters.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="notMatch"):?>
            <div class="alert alert-warning mt-5" role="alert"><strong>Your Passwords Does Not Match.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
          <h2 class="my-5"> Change Password</h2>
          <img id="regs" src="https://image.flaticon.com/icons/svg/1000/1000948.svg">
          <form method="post" class="mx-auto" action="changepassword.php">
            <div class="row text-left">
              <div class="form-group col-md-12">
                <label for="UserName">Current Password</label>
                <input
                  type="password"
                  name="oldPass"
                  id="oldPass"
                  class="form-control"
                  placeholder="Enter Your Current Passwprd"
                  aria-describedby=""
                  required
                />
              </div>
              <div class="form-group col-md-12">
                <label for="UserName">New Password</label>
                <input
                  type="password"
                  name="newPass"
                  id="newPass"
                  class="form-control"
                  placeholder="Enter Your New Password"
                  aria-describedby=""
                  required
                />
              </div>
              <div class="form-group col-md-12">
                <label for="UserName">New Password, again</label>
                <input
                  type="password"
                  name="newPassV"
                  id="newPassV"
                  class="form-control"
                  placeholder="Enter Your New Password Again"
                  aria-describedby=""
                  required
                />
              </div>
              
              <div class="form-group col-md-12">
                
                
              <button class="btn btn-success mt-4 mb-5" id="btn" type="submit" name="submit">Submit</button>
              <br><Br>
         
            </form>
            </section>
            <?php require "parts/footer.php"?>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/hw.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>