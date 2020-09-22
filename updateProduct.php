<?php
require_once "db.php";
$name= htmlspecialchars($_POST['name']);
$id=$_POST['id'];
$quan = htmlspecialchars($_POST['quantity']);

$sql = "UPDATE `products` SET `Name`='$name', `Quantity` = '$quan' WHERE `id` = '$id'";
if($conn->query($sql))
{
    
    
    header("Location:myProducts.php?");
    
}
else{
    echo $conn->error;
}
$conn->close();
?>