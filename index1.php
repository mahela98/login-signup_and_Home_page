
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Book Browser-Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <link href="cssf/body.css" rel="stylesheet">
    <link rel="stylesheet" href="cssf/searchbar_with_options.css">


</head>

<body  style=" background-image: url('./images/study.jpg');  background-repeat: no-repeat;
  background-size: cover;">
    <!-- navigation -->
    <?php
  include 'navigation-bar.php';
  ?>
    <!-- Page Content -->
    <div class=" mybackground">
    <div class="container ">
        <div style="padding-top: 75px;"></div>
        <!-- Content Row -->
        <div class="row">
            <!-- searchbar -->

            <div class="col-md-12 mb-5">
                <section class="search-sec">
                    <div class="container">
                        <form action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                                            <input type="text" class="form-control search-slt"
                                                placeholder="Enter Search">
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
                                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- content -->
            </div>
            <!--  item bo should place here -->
            <?php
            include 'item-box.php';
            ?>
            <?php
            include 'item-box.php';
            ?>
            <?php
            include 'item-box.php';
            ?>
            <?php
            include 'item-box.php';
            ?>
            <?php
            include 'item-box.php';
            ?>


        </div>
        <!-- /.row -->

    </div>

    </div>
    <!-- Footer -->
    <?php
  include "credits-layer.php";
  ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.js"></script>
    <script src="vendor/bootstrap/bootstrap.bundle.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>