<?php
session_start();
// $bookId = $_SESSION['bookId'];

$bookId1 = $_GET["message"];
require_once "includes/dbh-inc.php";

$sql = "SELECT * FROM books WHERE bookId = '$bookId1' ";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
echo $row["bookId"]; 

echo $row["bookName"];
echo $row["authorName"];



    // $bookName = $_POST["bookName"];
    // $authorName = $_POST["authorName"];
    // $publishedDate = $_POST["publishedDate"];
    // $price = $_POST["price"];
    // $amount = $_POST["amount"];
    // $category = $_POST["category"];
    // $discription = $_POST["discription"];

    // echo $amount;
    // echo $category;