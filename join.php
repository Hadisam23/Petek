<?php
require "db.php";
require "parts/innerheader.php";
 
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
        <title>Join Family</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="68">
        <div class="container mt-5 ">
            <br>
            <h1 class="headF">Join Existing Family</h1>

            <img id="regs" src="https://image.flaticon.com/icons/svg/2257/2257282.svg" class="rounded mx-auto d-block"/>

            
            <h3 class="mt-3">Families:</h3>
            <table style="background-color:rgb(167, 224, 247)" class="table" id="families">
                <thead>
                    <tr>
                    <th v-for="header in headers">
                    {{header}}
                    </th>
                    </tr>
                </thead>
                <tbody>
                <tr v-if="items.length === 0">
                    <td>No data</td>
                </tr>
                <tr v-else v-for="item in items">

                    <td>{{item.Name}}</td>
                    <td>
                            <a  :href="'askToJoin.php?holder=' + item.Name" >Ask To Join</a> 
                        </td>
                    
                </tr>
                </tbody>
            </table>
           
        </div>
        <?php require "parts/footer.php"?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/vue.js" type="text/javascript"></script>
        <script src="js/hw.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>