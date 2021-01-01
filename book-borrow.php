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


echo  $borrowDate . "<br>".$returnDate;
 ?>