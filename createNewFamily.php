<?php
require "db.php";
require "parts/innerHeader.php";
$holder = $_COOKIE['EmailUser'];
    $sql = "INSERT INTO `Family`(`FamilyName`) VALUES ('$holder')";
    if($conn->query($sql))
{
    echo json_encode($conn->insert_id);
    
}
else{
  header("Location:family.php?status=have");
    
}
?>
 <!doctype html>
 <html lang="en" data-theme="light">
<head>
  <meta charset="utf-8">

  <title>New Family</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
 
  <link rel="stylesheet" href="css/dist/style.css" type="text/css" />

</head>

<body>
<br>
  <section class="text-center  text-black p-5">
  
  <div class="container">
  <h1 class="CenterText ">Thank you </h1>
    
    <h4 class = "CenterText">Now You Have a Family</h4>
    <h6>you can manage your family</h6>
    <img src = "https://image.flaticon.com/icons/svg/809/809448.svg" height="250" width="250">
    
  </div>
  </section>
  <script src="js/hw.js" type="text/javascript"></script>
</body>
</html>
