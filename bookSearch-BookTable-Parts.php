<?php 

require_once 'includes/addBookFunctions-ini.php';
require_once "includes/dbh-inc.php";

if (isset($_POST["submit"])) {

    $quary = $_POST["quary"];

$sql = "SELECT bookId, bookName, authorName FROM books WHERE bookName ='$quary' OR authorName='$quary' ";
$result = $conn->query($sql);

if ($result===null) {
  echo 'no data ';
}

if (mysqli_num_rows($result) > 0) {

  echo '<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">
        <h6>#</h6>
      </th>
      <th scope="col">
        <h6>Book Name</h6>
      </th>
      <th scope="col">
        <h6>Author Name</h6>
      </th>
    </tr>
  </thead>  <tbody>';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["bookId"]."</td><td>".$row["bookName"]."</td>  <td>".$row["authorName"]."</td> </tr>";

  }
  echo "</tbody> </table>";
} 
else {
  echo "<br/> <br/><br/> 0 results found";
}
$conn->close(); 

    
}   
else{
$sql = "SELECT bookId, bookName, authorName FROM books";
$result = $conn->query($sql);

if ($result===null) {
  echo 'no data ';
}

if (mysqli_num_rows($result) > 0) {

  echo '<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">
        <h6>#</h6>
      </th>
      <th scope="col">
        <h6>Book Name</h6>
      </th>
      <th scope="col">
        <h6>Author Name</h6>
      </th>
    </tr>
  </thead>  <tbody>';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["bookId"]."</td><td>".$row["bookName"]."</td>  <td>".$row["authorName"]."</td> </tr>";

  }
  echo "</tbody> </table>";
} 
else {
  echo "<br/> <br/><br/> 0 results found";
}
$conn->close(); 
}