<?php
// session_start();
// if(!isset($_SESSION['userId'])) {
//   header("location:login.php?error=LoginFirst"); 
// }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou !</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



<body style=" background-image: url('images/study.jpg');  background-repeat: no-repeat;
  background-size: cover;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark   fixed-top" style="background-color: #001b2e;">
        <div class="container">
            <a class="navbar-brand" href="#">Book Browser</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class='nav-item'> <a class='nav-link' href='#'>About</a></li>
                    <li class='nav-item'> <a class='nav-link' href='login.php'>Log-In</a></li>
                    <li class='nav-item'> <a class='nav-link' href='signup.php'>Sign-In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="  background-image: linear-gradient(to bottom right, rgba(0, 132, 255, 0.733), rgba(255, 255, 0, 0.705)) !important;
    height: 100vh; ">
        //thankyou part
        <div style="padding-top: 25vh;">
            <div class=" text-center">
                <h1 class="display-3">Thank You!</h1>
                <p class="lead"><strong>Please check your email</strong> for verify your account and for further
                    instructions .</p>
                <hr>
                <p>
                    Having trouble? <a href="">Contact us</a>
                </p>
                <p class="lead">
                    <!-- <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Continue to homepage</a> -->
                </p>
            </div>

        </div>





        <div style="left: 0; bottom: 0; width: 100%; text-align: center; position: fixed;">

            <footer class="py-5" style="background-color: #060221c9; ">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; Book Browser 2020 <br>Made By EACMS</p>
                </div>
            </footer>
        </div>

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