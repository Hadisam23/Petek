<?php
require "db.php";
require "parts/innerHeader.php"

 ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
        <title>Family Managment</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="68">
        <section id="FamilyForm" class="text-center  text-black py-4 mt-2">
            <?php if(isset($_GET["status"])):?>
            <?php if($_GET["status"] =="fail"):?>
            <div class="alert alert-warning mt-3" role="alert"><strong>You are Already exists in the family.</strong></div>
            <?php endif; ?>
            <?php if($_GET["status"] =="have"):?>
            <div class="alert alert-warning mt-3" role="alert"><strong>You are Already Have a Family.</strong></div>
            <?php endif; ?>
            <?php if($_GET["status"] =="failMem"):?>
            <div class="alert alert-warning mt-3" role="alert"><strong>You are Not The Family Holder | There Are No Members In The Family </strong></div>
            <?php endif; ?>

            <?php endif; ?>
            <?php if(isset($_GET["status"])):?>
            <?php if($_GET["status"] =="failed"):?>
            <div class="alert alert-warning mt-3" role="alert"><strong>Could Not Delete User <?php echo $_GET['member'] ?></strong></div>
            <?php endif; ?>
            <?php endif; ?>
            <?php if(isset($_GET["status"])):?>
            <?php if($_GET["status"] =="success"):?>
            <div class="alert alert-success mt-3" role="alert">
                <strong>
                    <?php echo $_GET['member'] ?>
                    Deleted From Your Family
                </strong>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <div class="container">
                <h1 class="headF mt-3">Family Managment</h1>
                <img class="mt-2" width="150" height="150" src="https://image.flaticon.com/icons/svg/875/875500.svg" />

                <section class="py-2">
                    <div class="container">
                        <div id="link" class="row">
                            <div class="col-6 card">
                              
                                <h4>Family Member/Holder</h4>
                                <div class="btn-group-vertical mr-4   mt-2" role="group" aria-label="First group">
                                    <a class="btn btn-primary" role="button" :href="homepage5">Familie's Carts</a>
                                    
                                    <a class="btn btn-primary" role="button" :href="homepage6">Remove Members</a>
                                    
                                    <a class="btn btn-primary" role="button" :href="homepage7">Invite Members</a>
                                </div>
                            </div>
                            <div class="col-6 card ">
                                <h4>I Don't<br> Have a Family</h4>
                                <div class="btn-group-vertical mr-2 mt-3" role="group" aria-label="First group">
                                    <a class="btn btn-primary" role="button" :href="homepage8">Join Family</a>
                                    <a class="btn btn-primary" role="button" :href="homepage9">Create New Family</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br>
                </section>
            </div>
        </section>
        <?php require "parts/footer.php"?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="js/vue.js" type="text/javascript"></script>
        <script src="js/familya.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
