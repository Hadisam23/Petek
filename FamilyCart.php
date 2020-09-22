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
        <title>Family Carts</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="68">
        <div class="container my-3">
            <br />
            <h1 class="mt-4">Family Carts</h1>

            <img id="regs" src="https://image.flaticon.com/icons/svg/872/872243.svg" />
            <select id="FamSelect" class="form-control mdb-select other custom-select md-form" onchange="AddListToSelect()">
                <option value="" disabled selected>Select a previous cart to start with</option>
            </select>
            <input type="hidden" id ="FamilyHolder" class="form-control form-control-lg m-3" type="text" value="<?php echo $_COOKIE["EmailUser"] ?>">
            <input type="hidden" id="fmCartName" placeholer="Date" class="form-control form-control-lg m-3" type="text" />

            <h3 class="my-3">Add new product:</h3>
            <button type="button" data-toggle="modal" data-target=".fam-add-product-modal" class="btn btn-primary mb-3">Add New Product</button>

            <h3>Products List:</h3>
            <table style="background-color:rgb(167, 224, 247)" class="table" id="fmproducts">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <div class="modal fade fmremove" tabindex="-1" role="dialog">
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
                        <button type="button" class="btn fmbtnRemoveConfirm btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="fam-add-product-modal modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off" id="famaddProduct">
                            <div class="row others">
                                <div class="col-md-4">
                                    <label for="name" class="">Name:* </label><br />
                                    <input type="text" name="name" id="fmname" class="form-control" placeholder="" aria-describedby="helpId" required />
                                </div>
                                <div class="col-md-4">
                                    <label for="quantity" class="">Quantity*: </label><br />
                                    <input type="number" name="quantity" id="fmquantity" class="form-control" placeholder="" aria-describedby="helpId" required />
                                </div>
                            </div>
                            <input type="submit" class="d-none fmbtnSubmit" />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn fmbtnAddProduct btn-primary">Add Product</button>
                        <button type="button" class="btn btn-secondary resetAddProductForm" data-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
        <button id="btnSavefmCart" class="btnNew btn-primary mb-3">Add New Cart</button>

        <br />
        <br />
        <br />
        <br />
        <?php require "parts/footer.php"?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/familya.js" type="text/javascript"></script>
        <script src="js/vue.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
