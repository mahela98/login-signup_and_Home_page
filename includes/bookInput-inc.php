<?php
session_start();
 ?>

<?php
if(isset($_SESSION['userId'])) {

if (isset($_POST["submit"])) {

    $bookName = $_POST["bookName"];
    $authorName = $_POST["authorName"];
    $publishedDate = $_POST["publishedDate"];
    $price = $_POST["price"];
    $discription = $_POST["discription"];
   

    require_once 'dbh-inc.php';
    require_once 'addBookFunctions-ini.php';
   

    if (emptyBookInput($bookName,$authorName)) {
        header("location:../adminPre/bookInput.php?error=emptyBNandANInput");
        exit();
    }
    // have to enter other error handlers
    if (bookNameExists($conn,$bookName,$authorName) !==false) {
        header("location:../adminPre/bookInput.php?error=BookIsInTheDatabase");
        exit();  
    }



    createBook($conn,$bookName,$authorName,$publishedDate,$price,$discription);
}
else{
header("location:../adminPre/bookInput.php");
    exit();
}
}

else{
    header("location:../login.php?error=LoginFirst"); 
}