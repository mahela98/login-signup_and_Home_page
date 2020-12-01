<?php
function emptyBookInput($bookName,$authorName){
    $result;

   if (empty($bookName)||empty($authorName)) {
      $result= true; 
   }else{
       $result= false;
   }
   return $result;
}

function createBook($conn,$bookName,$authorName,$publishedDate,$price,$discription){
    $stmt = mysqli_stmt_init($conn);
    $sql = "INSERT INTO books(bookName,authorName,publishedDate,price,discription) VALUES (?,?,?,?,?);";
  
   if (!mysqli_stmt_prepare($stmt,$sql)){
       header("location: ../bookInput.php?error=stmtFaild4");
       exit();
            }

   mysqli_stmt_bind_param($stmt,"sssss",$bookName,$authorName,$publishedDate,$price,$discription);
   mysqli_stmt_execute($stmt); 

   mysqli_stmt_close($stmt);

   header("location: ../bookInput.php?error=successfullyAdded");
   exit();}