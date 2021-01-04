<?php
session_start();
if(!isset($_SESSION['userId'])) {
  header("location:login.php?error=LoginFirst"); 
}


$userId= $_SESSION['userId'];
$bookId = $_GET["message"];
$borrowDate =  date("Y/m/d");
$returnDate = date("Y/m/d" ,  strtotime('+7 days'));
// get date and time of borrow in utc form

require_once 'dbh-inc.php';

// echo  $borrowDate . "<br>".$returnDate . "<br>". $bookId. "<br>".$userId ;

borrowBook($conn,$userId,$bookId,$borrowDate,$returnDate);

function borrowBook($conn,$userId,$bookId,$borrowDate,$returnDate){
    $stmt = mysqli_stmt_init($conn);
    $sql = "INSERT INTO borrowbooks(userId,bookId,borrowDate,returnDate) VALUES (?,?,?,?);";
  
   if (!mysqli_stmt_prepare($stmt,$sql)){
       header("location: ../bookBorrow.php?error=stmtFaild4bookBorrow");
       exit();
            }

   mysqli_stmt_bind_param($stmt,"ssss",$userId,$bookId,$borrowDate,$returnDate);
   mysqli_stmt_execute($stmt); 

   mysqli_stmt_close($stmt);

   header("location: ../bookSearch.php?error=successfullyBorrowed");
   exit();}


 ?>