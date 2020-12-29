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
    $amount = $_POST["amount"];
    $category = $_POST["category"];
    $discription = $_POST["discription"];
   

    require_once '../../includes/dbh-inc.php';
    require_once 'addBookFunctions-ini.php';
   

    if (emptyBookInput($bookName,$authorName)) {
        header("location:../bookInput.php?error=emptyBNandANInput");
        exit();
    }
    // have to enter other error handlers
    if (bookNameExists($conn,$bookName,$authorName) !==false) {
        header("location:../bookInput.php?error=BookIsInTheDatabase");
        exit();  
    }



    createBook($conn,$bookName,$authorName,$publishedDate,$price,$amount,$category,$discription);
}
else{
header("location:../bookInput.php?error=not working");
    exit();
}
}

else{
    header("location:../login.php?error=LoginFirst"); 
}