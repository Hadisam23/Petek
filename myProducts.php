<?php
require "db.php";
 require "parts/innerheader.php";
 if(!isset($_COOKIE["EmailUser"]) && (!isset($_COOKIE["EmailNumber"])))
{
    header("Location:Sign_in.php ?status=must");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
        <title>Market</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="68">
        <div class="container my-3">
           <br><br><br><br>
            <a id="link" :href="homepage"><img src="https://image.flaticon.com/icons/svg/709/709624.svg" width="50" height="50"></a>
            
            <h1 class="headF">Shopping Carts</h1>

            <img id="regs" src="https://image.flaticon.com/icons/svg/2674/2674505.svg" />

            <select style="display:none" id="mySelect"></select>
            <input type="hidden" id ="CartName" placeholer="Date" class="form-control form-control-lg m-3" type="text" >
           
            

            <h3>Products List:</h3>
            <table class="table" id="products">
                <thead>
                    <tr>
                    <th v-for="header in headers">
                    {{header}}
                    </th>
                    </tr>
                </thead>
                <tbody>
                <tr v-if="items.length === 0">
                    <td><h5>No Data For You Now</h5></td>
                </tr>
                <tr v-else v-for="item in items">

                    <td class="name">{{item.name}}</td>
                    <td>{{item.quantity}}</td>
                    
                    <td><a :href="'editForm.php?id='+ item.id" class="btnEdit ">Edit</a> |
                            <a href="#" class="btnRemove">Remove</a></td>
                </tr>
                
                
                </tbody>
            </table>
        </div>

        <div class="modal fade remove" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>You are about to delete</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btnRemoveConfirm btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-product-modal modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off" id="addProduct">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name" class="">Name:* </label><br />
                                    <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" required />
                                </div>
                                <div class="col-md-4">
                                    <label for="quantity" class="">Quantity*: </label><br />
                                    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="" aria-describedby="helpId" required />
                                </div>
                            </div>
                            <input type="submit" class="d-none btnSubmit" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btnAddProduct btn-primary">Add Product</button>
                        <button type="button" class="btn btn-secondary resetAddProductForm" data-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
    

        
        
        <br><br><br><br>
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
