<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:../login.php?error=LoginFirst"); 
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

  <style>
    .btn {
      padding-top: 10px;
      padding-bottom: 10px;
      font-size: 15px;

      background-color: rgb(0, 21, 61);
      border: none;
    }

    .btn:hover {
      background-color: rgb(54, 0, 105);
    }
  </style>
</head>

<body style="  background-color:#c5c5c5c7;">


<?php
include 'admin-nav-bar.php';
?>
  <div style="padding-top: 70px;"></div>
  <!-- content -->
  <div class="grey-bg container-fluid">
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card" style="background-color: rgb(252, 252, 252);">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                </div>
                <div class="media-body text-right">
                  <h3>278</h3>
                  <span>Users</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fa fa-book fa-3x" aria-hidden="true"></i>
                </div>
                <div class="media-body text-right">
                  <h3>156</h3>
                  <span>Books</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fa fa-book fa-3x" aria-hidden="true"></i>
                </div>
                <div class="media-body text-right">
                  <h3>645</h3>
                  <span>Available Books</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fa fa-adn fa-3x" aria-hidden="true"></i> </div>
                <div class="media-body text-right">
                  <h3>423</h3>
                  <span>Administrators</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div style="padding-top: 30px;"></div>

  <div class="grey-bg container-fluid">
    <div class="row">


      <div class="col-xl-3 col-sm-6 col-6" style="padding-bottom: 10px;">
        <div class="card text-center">
          <div class="card-body">
            <img src="https://img.icons8.com/ios-filled/75/000000/add-user-male.png" alt="add user icon" />
            <br /><br />
            <a href="test.php" style=" text-decoration: none; "> <button type="button" class="btn btn-primary btn-sm btn-block">Add User</button></a>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-6">
        <div class="card  text-center">
          <div class="card-body">
            <img src="https://img.icons8.com/ios-filled/75/000000/add-book.png" alt="Add book icon">
            <br /><br />
            <a href="bookInput.php" style=" text-decoration: none; "><button type="button" class="btn btn-primary btn-sm btn-block">Add Book</button>
            </a>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-6">
        <div class="card  text-center">
          <div class="card-body">
            <img src="https://img.icons8.com/ios-filled/75/000000/find-user-male.png " alt="Search user icon" />
            <br /><br />
            <button type="button" class="btn btn-primary btn-sm btn-block">Search User</button>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 col-6">
        <div class="card  text-center">
          <div class="card-body">
            <img src="https://img.icons8.com/ios-filled/75/000000/book-and-pencil.png" alt="search book icon" />
            <br /><br />
            <button type="button" class="btn btn-primary btn-sm btn-block">Search Book</button>

          </div>
        </div>
      </div>

    </div>

  </div>


  <div style="padding-top: 30px;"></div>

  <div class="col-12 col-lg-6 ">
    <div class="card ">
      <div class="card-header">
        <h5>Most Liked Book</h5>
      </div>
      <div class="card-body"
        style="background-image: url('../images/23.jpg'); background-repeat: no-repeat; background-size: cover; height: 50vh; width: 100%;">
      </div>
      <div class="card-footer text-muted">
      </div>
    </div>
  </div>

  <div style="padding-top: 40px;"></div>


  <footer class="py-5" style="background-color: #060221c9;  position: relative; left: 0; bottom: 0; width: 100%;  ">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Book Browser 2020 <br>Made By EACMS</p>
    </div>
  </footer>





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

</body>

</html>