<?php

$userId= $_SESSION['userId'];
$bookId = $_GET["message"];

require_once 'includes/dbh-inc.php';

$sql = "SELECT * FROM borrowbooks WHERE userId =  '$userId'  and  bookId =  '$bookId'";
$result = $conn->query($sql);

$returnedOrNot=1;

while($row = $result->fetch_assoc()) {

    if($row["returned"]==0){
        // echo 'not returned';
        $returnedOrNot=0;
    }elseif($row["returned"]==1){
        // echo 'returned';
        $returnedOrNot=1;
    }
  }



    if($returnedOrNot==1){
        echo '
        <div class="col-6 col-lg-3">
                
        <button type="submit" class="mybtnl btn btn-primary">Like</button>
    </div>';
    }
    else{
        echo '
        <div class="col-6 col-lg-3">
                
        <button type="submit" class="mybtnl btn btn-primary">Like</button>
    </div>';   
}
