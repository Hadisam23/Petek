<?php require "parts/header.php";

$vkey = md5(time());
if(isset($_POST['submit']))
{
  $email= htmlspecialchars($_POST['email']);
  $userName = htmlspecialchars($_POST['usrnm']);
  $phone = htmlspecialchars($_POST['phn']);
  $emailver = htmlspecialchars($_POST['emailver']);
}

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
  <title>Registeration</title>
  
</head>
  <body data-spy="scroll" data-target=".navbar" data-offset="68">
    
    <section id="registerForm" class="text-center text-black py-4">
        <div class="container">
                <?php if(isset($_GET["status"])):?>
                <?php if($_GET["status"] =="fail"):?>
                <div class="alert alert-warning mt-3" role="alert"><strong>Failed to add user</strong></div>
                <?php endif; ?>
                <?php endif; ?>
                <?php if(isset($_GET["status"])):?>
                <?php if($_GET["status"] =="failUser"):?>
                <div class="alert alert-warning mt-3" role="alert"><strong>UserName should be at least 5 characters</strong></div>
                 <?php endif; ?>
                <?php endif; ?>
                 <?php if(isset($_GET["status"])):?>
                 <?php if($_GET["status"] =="failEmail"):?>
                 <div class="alert alert-warning mt-3" role="alert"><strong>The emails did not match</strong></div>
                  <?php endif; ?>
                 <?php endif; ?>
                 <h1 class = "headF PY-4 mt-3">Register Form</h1>
                 <img id="regs" src="https://image.flaticon.com/icons/svg/760/760847.svg">
        <form method="post" class ="mx-auto"  action="insert.php">
      
          <div class="row text-left">
              <div class="form-group col-md-12"> 
              <h5 class="text-secondary">Email:</h5>
               <input v-model="userEmail" id="email"
                class="form-control  " 
                type="email"
                placeholder="Email" 
                 name="email" required>
             </div>

             <div class="form-group col-md-12 ">
             <h5 class="text-secondary">Email, Again:</h5>
                <input v-model="userEmailV" id="emailVer" class="form-control" type="email" placeholder="Email Verification" name="emailver" required>
             </div>
             <div class="form-group col-md-12 ">
             <h5 class="text-secondary">User Name:</h5>
               <input v-model="userName" class="form-control" 
               type="text" 
               placeholder="Username" 
               name="usrnm">
             </div>
      
             <div class="form-group col-md-12">
             <h5 class="text-secondary">Phone:</h5>
                <input v-model="phone" class="form-control" type="tel" placeholder="Phone-Number" name="phn">
             </div>
            <input type="hidden" id="vk" name="vkey" value="<?php echo $vkey ?>">
            <button type="submit" class=" " id="btn" name="submit" >Submit</button>
          </form> 
                 </div>
    </section>


   <?php require "parts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/vue.js" type="text/javascript"></script>
    <script src="js/hw.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>