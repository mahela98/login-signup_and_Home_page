<!DOCTYPE html>
<html>

<head>
    <title>Book Browser-Sign-In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- vendor\bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <!-- Custom Theme files -->
    <link href="signup.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->


</head>

<body>

    <?php
  include 'navigation-bar.php';
  ?>
    <div class="mybackground">
    <?php

include 'error-message.php';

?>
        <!-- main -->
        <div class="container" style="padding-top:75px;">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box">

                    <div class="col-lg-12 login-title">
                        Register
                    </div>

                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form action="includes/signup-inc.php" method="POST">
                                <div class="form-group">
                                    <label class="form-control-label">EMAIL</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">FULL NAME</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">USER NAME</label>
                                    <input type="text" class="form-control" name="userName">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">RE-ENTER YOUR PASSWORD</label>
                                    <input type="password" class="form-control" name="passwordRep">
                                </div>

                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-12  lg-padding">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            name="submit">Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-6 ">
                                <a href="login.php" class="already">
                                    <p>Already have an account</p>
                                </a>
                            </div>



                        </div>

                    </div>

                </div>

            </div>

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