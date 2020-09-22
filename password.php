<?php require "parts/header.php";
$user = $_COOKIE["email"];
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
  <title>Password Screen</title>
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="68">

    <section id="passForm" class="text-center  text-black py-2">
    <div class="container">
    <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="smalll"):?>
            <div class="alert alert-warning mt-5" role="alert"><strong>Password Should Be At Least 5 Characters.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($_GET["status"])):?>
          <?php if($_GET["status"] =="notMatchh"):?>
            <div class="alert alert-warning mt-5" role="alert"><strong>Your Passwords Does Not Match.</strong></div>
          <?php endif; ?>
          <?php endif; ?>
          <h1 class = "headF mt-5">Password Activation</h1>
          <img id="regs" src="https://image.flaticon.com/icons/svg/1060/1060666.svg">
          <form id = "formstyle" method="POST" action="update.php">
           <div class="row text-left">
           <div class="form-group col-md-12">
            <input id="passw" class="input-field mt-2" type="password" placeholder="Password" name="PassWord" required>
          </div>
          <div class="form-group col-md-12">
           
            <input id = "passVer" class="input-field mt-2" type="password" placeholder="Password Verification" name="passver" required>
          </div>
          <input type="hidden" name="hiddenUser" value ="<?php echo $user; ?>">
          
          <input type="hidden" name="ver" value ="<?php echo $_GET['vkey']; ?>">
          <div class="form-group col-md-12">
          <button class="mt-2" type="submit" id="btn">Submit</button>
          </div>
        
        </form> 
        </div>
      </section>
    
      <?php require "parts/footer.php"?>
      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="js/hw.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  </body>
  </html>