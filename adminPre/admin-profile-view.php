<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile-page02.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-image: url('../images/study.jpg');  background-repeat: no-repeat;
background-size: cover;  background-color:#020016e7; ">

<section  style=" background-color:#020016c5; ">
    <div style="  padding-bottom: 0px;">

        <?php
            include 'admin-nav-bar.php';
            include '../error-message.php';
            ?>
        <div style="padding-bottom: 70px;"></div>
        <div class="container">
            <div class="main-body">



                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="../images/image.jpg" alt="Admin" class="rounded-circle" width="150"
                                        height="150">
<?php 

$userID=$_SESSION["userId"];
require_once "../includes/dbh-inc.php";
$sql = "SELECT * FROM users WHERE userId = '$userID'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
                                        <?php
                                        echo '
                                    <div class="mt-3">
                                        <h4>'.$row["userName"].'</h4>
                                        <p class="text-secondary mb-1">Contact : '.$row["mobile"].'</p>
                                        <p class="text-muted font-size-sm" </p> </div> </div> </div> </div> </div> <div
                                            class="col-md-8">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Full Name</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                        '.$row["fullName"].'
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">User Name</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                        '.$row["userName"].'
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Email</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                        '.$row["userEmail"].'
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Mobile</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                        '.$row["mobile"].'
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                     
                                                        <div class="col-10">  ';
                                                        include 'admin-changePW-popup.php';

                                                echo '
                                                        
                                                        </div>
                                                        <div class="col-2 text-secondary" style="padding-right: 5px; padding-left: 5px;">
                                                            <a href="admin-profile-edit.php">
                                                            <button style="padding:2px; padding-right: 15px; padding-left: 15px;" type="button" class="btn btn-secondary">Edit</button>
                                                        </a>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>

                                    </div>  ';

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



 <div style="padding-bottom: 10px; padding-top: 10px;"> 


    </div>

    </div>


    <?php
    include 'admin-footer.php';
    
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</section>
</body>

</html>