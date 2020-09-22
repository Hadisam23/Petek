<?php
require "db.php";
require "parts/innerHeader.php";

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/dist/style.css" type="text/css" />
        <title>Market</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="68">
<br>

        <div class="container mt-5 ">
        <h2 >Invite Members To Families</h2>
       
        <form autocomplete="off" id="editProduct" action="api/addFamilyMember.php" method = "post">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label for="name" class="">Family Holder Email:* </label><br />
                                    <select id="Familyname"  class="form-control mdb-select other custom-select md-form " name="name"  v-model="selected" >
                                    <option v-for="item in items" v-bind:value="item.Name" >
                                        {{ item.Name }}
                                    </option>
                                    </select>
                                    

                                </div>
                                <div class="col-md-6">
                                    <label for="quantity" class="">Email*: </label><br />
                                    <input type="Email"   name="MemberMail" id="emailMem" class="form-control" placeholder="" aria-describedby="helpId" required />
                                </div>
                            </div>
                            <input type="hidden" value="<?=$_COOKIE["EmailUser"];?>" name='HolderMail'/>
                            <input type="submit" name="submit" value="invite" class="btn btn-primary mt-5 btnSubmit" />
                        </form>


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
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btnAddProduct btn-primary">Add Product</button>
                        <button type="button" class="btn btn-secondary resetAddProductForm" data-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
        
        
       <br><br>
        <?php require "parts/footer.php"?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/vue.js" type="text/javascript"></script>
        <script src="js/hw.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       
    </body>
</html>