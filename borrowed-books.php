<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:login.php?error=LoginFirst"); 
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Books</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="cssf/body.css" rel="stylesheet">


<body style=" background-image: url('images/image.jpg');  background-repeat: no-repeat;
  background-size: cover;">

    <div style="  background-image: linear-gradient(to bottom right, rgba(0, 132, 255, 0.733), rgba(255, 255, 0, 0.705)) !important;
    " >

        <?php
  include 'navigation-bar.php';
  ?>
        <?php

include 'error-message.php';


?>

        <div class="search-sec" style="padding-top:40px; padding-bottom:50px"> </div>

        <?php
        include 'item-box.php';
    
   include "credits-layer.php";
 ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    
</body>

</html>