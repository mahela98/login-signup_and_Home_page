<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Input</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- vendor\bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

    <style>
        .mycont{
            background-color: rgba(182, 182, 182, 0.719);
             padding:30px;
             border-radius:10px ;
             align-items: center;
        }
        label{
            color:black;
            font-size:15px;
            font-weight :bold;
        }
        input{
            border:0px;
        }
        textarea{
            border:0px;
        }
        input:hover{
           border-color:rgb(156, 0, 196);
           border:0px;
           border-bottom: 4px solid #2e009b;
        }
        textarea:hover{
            border-color:rgb(156, 0, 196);
           border:0px;
           border-bottom: 5px solid #2e009b;
        }
        h2{
            font-size: 30px;
            font-style: normal;
            text-align: center;
            padding:7px;
            background-color: rgba(40, 26, 243, 0.559);
            border-radius:10px ;
            color:white;
        }
        .btn{
            background-color: rgb(0, 21, 61);
            border: none;
        }
        .btn:hover {
      background-color: rgb(54, 0, 105);
    }
    </style>

</head>

<body style=" background-image: url('../images/image.jpg');  background-repeat: no-repeat;
  background-size: cover;">

<!-- nav-bar -->
<?php
include 'admin-nav-bar.php';
  ?>

<!-- error message -->
<?php
include '../error-message.php';
?>

<div style="  background-color:#3f3f3f9d;">
    <div class="container" style="padding-top:70px; padding-bottom:50px">
        <div class="row">
            <div class="col col-lg-6">
                <h2>Add Books </h2>
            </div>
            </div>
            <!-- form -->
            <div class="row">
            <div class="col-12 col-lg-6 col-md-12 mycont">
                <form action="../includes/bookInput-inc.php" method="POST">
                    <div class="form-group">
                        <label class="form-control-label">Book Name</label>
                        <input type="text" class="form-control" name="bookName">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Author Name</label>
                        <input type="text" class="form-control" name="authorName">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Published date</label>
                        <input type="date" class="form-control" name="publishedDate">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Rs.">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Amount</label>
                        <input type="number" class="form-control" name="amount">
                    </div>

                    <div class="form-group">
                        <label  class="form-control-label" for="inputState">Category</label>
                        <select id="Category" class="form-control">
                          <option selected>Information Tec</option>
                          <option>Law</option>
                          <option>Managment</option>
                          <option>Bio Science</option>
                          <option selected>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="form-group green-border-focus">
                            <label for="exampleFormControlTextarea5">Discription</label>
                            <textarea class="form-control" name="discription" id="discription" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 loginbttm">
                        <div class="col-lg-12  lg-padding">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Add Book
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
  <!-- Footer -->

  <?php
  include "../credits-layer.php";
  ?>


    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.js"></script>
    <script src="vendor/bootstrap/bootstrap.bundle.js"></script> -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>

</html>