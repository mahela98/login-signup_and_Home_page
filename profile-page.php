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
    <title>Profile</title>
    <link rel="stylesheet" href="profile-page02.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-image: url('images/study.jpg');  background-repeat: no-repeat;
background-size: cover;  background-color:#020016e7; ">

<section style="  background-image: linear-gradient(to bottom right, rgba(0, 132, 255, 0.733), rgba(255, 255, 0, 0.705)) !important;
    " >
    <div style="  padding-bottom: 0px;">

        <?php
            include 'navigation-bar.php';
            include 'error-message.php';
            ?>
        <div style="padding-bottom: 70px;"></div>
        <div class="container">
            <div class="main-body">

            <?php 

$userID=$_SESSION["userId"];
require_once "includes/dbh-inc.php";
$sql = "SELECT * FROM users WHERE userId = '$userID'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


$imageURL = 'profile-images/'.$row["imageURL"];
?>

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <!-- <img src="images/image.jpg" alt="Admin" class="rounded-circle" width="150"
                                        height="150"> -->
                                        <img src="<?php echo $imageURL; ?>" alt="profile-picture" class="rounded-circle" width="150"
                                        height="150"/>
                                        
                                        <?php  include 'profilePic-Update.php';  ?>
                                        
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
                                                        include 'popup.php';

                                                echo '
                                                        
                                                        </div>
                                                        <div class="col-2 text-secondary" style="padding-right: 5px; padding-left: 5px;">
                                                            <a href="profile-edit.php">
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
    <div style="
    background-color: rgba(255, 255, 255, 0.932);
     padding: 5px;
     border: none;
     outline: none;
     "> <h5 style="padding-top: 2px; text-align: center;">Borrowed Books</h5>
    
    </div>


    <div style="padding-bottom: 10px; padding-top: 10px;">

        <?php
    include 'item-box.php';

?>
    </div>

    </div>


    <?php
    include 'credits-layer.php';
    
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</section>
</body>

</html>