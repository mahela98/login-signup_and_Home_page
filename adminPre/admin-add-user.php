<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:../login.php?error=LoginFirst"); 
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Add User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="admin-css/registerUser.css" rel="stylesheet" type="text/css" media="all" />




</head>

<body style="background: none; background-color: rgb(143, 143, 143);">


<?php
include 'admin-nav-bar.php';
?>
    <?php

include '../error-message.php';

?>

    <div>
        <!-- main -->
        <div class="container" style="padding-top:30px;">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box">
                    <div class="col-lg-12 login-title"> Add-User</div>
                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form action="admin-includes/add-user-inc.php" method="POST">
                                <div class="form-group">
                                    <label class="form-control-label">EMAIL</label>
                                    <input type="email" class="form-control" name="email" >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">FULL NAME</label>
                                    <input type="text" class="form-control" name="name" >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">USER NAME</label>
                                    <input type="text" class="form-control" name="userName" >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">CONTACT-NUMBER</label>
                                    <input type="tel" class="form-control" name="mobile" 
                                        placeholder="0771223456">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" class="form-control" name="password" >
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">RE-ENTER YOUR PASSWORD</label>
                                    <input type="password" class="form-control" name="passwordRep" >
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-control-label">ADMIN
                                            <input class="form-check-input" type="radio" name="admin"
                                                id="yes" value="yes"> YES
                                            <input checked class="form-check-input" type="radio"
                                                name="admin" id="no" value="no"> NO
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-12  lg-padding">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            name="submit">Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <?php
  include 'admin-footer.php';

  ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>

</html>