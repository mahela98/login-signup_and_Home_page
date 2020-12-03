<?php

// if (isset($_POST["submit"])) {

//     $searchName = $_POST["searchName"];
//     // $password = $_POST["password"];
 
//     require_once 'dbh-inc.php';
//     require_once 'addBookFunctions-ini.php';

//     if (emptySearch($searchName) !==false) {
//         header("location: ../bookSearch.php?error=emptyInp");
//         exit();
//     }
//     // have to enter other error handlers

//     if (bookSearch($conn,$searchName) !==false) {
        
        
// $sql = "SELECT bookId, bookName, authorName FROM books WHERE authorName =  $searchName";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   echo "<table><tr><th>ID</th><th>Name</th></tr>";
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<tr><td>".$row["bookId"]."</td><td>".$row["bookName"]." ".$row["authorName"]."</td></tr>";
//   }
//   echo "</table>";
// } else {
//   echo "0 results";
// }
// $conn->close(); 


//     }
//     elseif(bookSearch($conn,$searchName) ===false) {
//         header("location: ../bookSearch.php?error=bookDoesNotExists");
//         exit();  
//     }

    
// }


// else{
//     header("location: ../bookSearch.php");
//     exit();
// }