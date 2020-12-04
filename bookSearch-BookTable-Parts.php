<?php 

require_once 'includes/addBookFunctions-ini.php';
require_once "includes/dbh-inc.php";

if (isset($_POST["submit"])) {

    $quary = $_POST["quary"];

$sql = "SELECT * FROM books WHERE bookName ='$quary' OR authorName='$quary' ";
$result = $conn->query($sql);




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
      <th scope="col">
      <h6>Availability</h6>
    </th>
    </tr>
  </thead>  <tbody>';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row["bookAvailability"]==1) {
      $ava = 'Availabile';
    }else{ $ava = 'Not Availabile';}

    echo "<tr>
    <td>".$row["bookId"]."</td> 
    <td>".$row["bookName"]."</td> 
    <td>".$row["authorName"]."</td> 
    <td>".$ava."</td> 
    </tr>";

  }
  echo "</tbody> </table>";
} 

//  if the search field is empty
elseif(empty($quary)===true){
$sql = "SELECT * FROM books";
$result = $conn->query($sql);


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
            <th scope="col">
            <h6>Availability</h6>
          </th>
          </tr>
        </thead>  <tbody>';
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if ($row["bookAvailability"]==1) {
            $ava = 'Availabile';
          }else{ $ava = 'Not Availabile';}
          echo "<tr>
          <td>".$row["bookId"]."</td> 
          <td>".$row["bookName"]."</td> 
          <td>".$row["authorName"]."</td> 
          <td>".$ava."</td> 
          </tr>";
        }
        echo "</tbody> </table>";

      } 


}
else {
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
      <th scope="col">
      <h6>Availability</h6>
    </th>
    </tr>
  </thead>  <tbody>

    <tr><td> 0 results found</td><td></td>  <td></td> </tr>
  </tbody>
</table>';
}
$conn->close(); 

} 