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
    <title>Book Search</title>
  </head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="/cssf/body.css" rel="stylesheet">
    <link rel="stylesheet" href="cssf/searchbar_with_options.css">

  <body style=" background-image: url('images/study.jpg');  background-repeat: no-repeat;
  background-size: cover;">
  <div style="  background-color:#0700169d;">
  <?php
  include 'navigation-bar.php';
  ?>

  <section class="search-sec" style = "padding-top:70px; padding-bottom:50px">
                    <div class="container">
                        <form action="bookSearch.php" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                                            <input type="text" class="form-control search-slt"
                                                placeholder="Enter Search" name="quary">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt">
                                                <option>Choose Catagory</option>

                                                <option>
                                                    <a>
                                                        <p>&#9733; Information Tec</p>
                                                    </a href="#">
                                                </option>
                                                <option>
                                                    <a>
                                                        <p>&#9733; Managment</p>
                                                    </a href="#">
                                                </option>
                                                <option>
                                                    <a>
                                                        <p>&#9733; Law</p>
                                                    </a href="#">
                                                </option>

                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <button type="submit" class="btn btn-danger wrn-btn" name="submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
<!-- table section -->
<div class="row">
        <div class="col-1"></div>
        <section class="col-10">

            <?php
            include 'bookSearch-BookTable-Parts.php'
            ?>
        </section>
    </div>

    </div>
<?php
  include "credits-layer.php";
  ?>

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