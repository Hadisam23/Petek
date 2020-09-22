<?php require "parts/header.php";?>

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
    <title class="headF">Reset</title>   
</head>
<body ody data-spy="scroll" data-target=".navbar" data-offset="68">
  
    <section id="User" class="text-center  text-black py-5">
        <div class="container">
          <h2 class="mt-2"> Please enter your email in order to reset password</h2>
          <img class = "mt-4" id="regs" src="https://image.flaticon.com/icons/svg/1745/1745504.svg">
          <form method="post" class="mx-auto" action="updatePass.php">
            <div class="row text-left">
              <div class="form-group col-md-12">
                <label for="UserName">Email</label>
                <input
                  type="email"
                  name="EmailUser"
                  id="emailUser"
                  class="form-control mb-4"
                  placeholder="Enter Your Email"
                  aria-describedby=""
                  required
                />
              </div>
              
              <div class="form-group col-md-12">
                <label for="userSignIn"></label>
                
                  <button class="btn btn-success mb-5" id="btn" type="submit" name="submit">Submit</button>
              </div>
            <br><br><br><Br><br><br><br><br><br><br><br><br><br><br><br><Br>
              </div>
            </form>
            </section>
            <?php require "parts/footer.php"?>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/hw.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>