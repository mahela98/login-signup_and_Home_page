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

//    functions in searchbar when search

   function emptySearch($searchName){
    $result;

   if (empty($searchName)) {
      $result= true; 
   }else{
       $result= false;
   }
   return $result;
}

// function bookSearch($conn,$searchName){
//     $sql = "SELECT * FROM books WHERE bookName = ? OR authorName = ?;";
//     $stmt = mysqli_stmt_init($conn);
    
//     if (!mysqli_stmt_prepare($stmt,$sql)) {
//         header("location: ../bookSearch.php?error=stmtFaild1");
//         exit();
//     }
//     mysqli_stmt_bind_param($stmt,"ss",$searchName,$searchName);
//     mysqli_stmt_execute($stmt);
    
//     $resultData = mysqli_stmt_get_result($stmt);
    
//     if ($row = mysqli_fetch_assoc($resultData)) {
//         return $row;
    
//     }else{
//         $result = false;
//         return $result;
//     }
//     mysqli_stmt_close($stmt);
    
//     }