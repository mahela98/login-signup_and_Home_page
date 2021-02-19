<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body>
    

<?php
// Include the database configuration file
include '../includes/dbh-inc.php';

// Get images from the database
$query = $conn->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    echo '<div class="col-12 row "> ';
    while($row = $query->fetch_assoc()){
        $imageURL = '../adminPre/book-Images/'.$row["file_name"];
 
     echo '
     <div class="col-md-4 mb-5 col-6 col-lg-3 ">
             <div class="card  h-100" style=" background-color: rgb(255, 255, 255); color: rgb(43, 0, 71);">
               <div class="card-body">
                 <h5 class="card-title">Harry Potter and the Sorcerers Stone</h5> ';
                 ?>

        <img src="<?php echo $imageURL; ?>" alt=""  style="width:100%; "/>

                 <?php  
                 echo '
                 
                 <p class="card-text aname" style="font-size: 14px; color: rgb(0, 0, 92);  "> 
                   Author : <strong>name</strong> 
                   </p>
                   
               </div>
               <div class="card-footer">
                 <a href="one-book-view.php?message=name " class="btn btn-primary btn-sm">View</a>
               </div>
             </div>
           </div>
          ';

    }
    echo " </div> ";
}else{ 
   echo '<p>No image(s) found...</p>';
 } 
 ?>
</body>
</html> -->