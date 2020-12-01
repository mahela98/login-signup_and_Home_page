<?php
if (isset($_POST["submit"])) {

    $bookName = $_POST["bookName"];
    $authorName = $_POST["authorName"];
    $publishedDate = $_POST["publishedDate"];
    $price = $_POST["price"];
    $discription = $_POST["discription"];
   

    require_once 'dbh-inc.php';
    require_once 'addBookFunctions-ini.php';
   

    if (emptyBookInput($bookName,$authorName!==false)) {
        header("location:../bookInput.php?error=emptyInput");
        exit();
    }
    // have to enter other error handlers

    createBook($conn,$bookName,$authorName,$publishedDate,$price,$discription);
}
else{
header("location:../bookInput.php");
    exit();
}