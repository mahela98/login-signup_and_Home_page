<?php

// echo "functions loaded";
function emptyInputsignup($email,$fullName,$userName,$password,$passwordRep){
     $result;

    if (empty($fullName) || empty($email) ||empty($userName)||empty($userName) ||empty($password )||empty($passwordRep)) {
       $result= true; 
    }else{
        $result= false;
    }
    return $result;
 }


 function invaliduserName($userName){
        if (!preg_match("/^[a-z A-Z 0-9]*$/" , $userName)) {
            $result= true; 
        }else{
            $result= false;
        }
        return $result;
 }
 
 function invalidEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result= true; 
    }else{
        $result= false;
    }
    return $result;
}

function passwordMatch($password,$passwordRep){
    if ($password !== $passwordRep) {
        $result= true; 
    }else{
        $result= false;
    }
    return $result;
}

function usernameExists($conn,$userName,$email){
$sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../signup.php?error=stmtFaild1");
    exit();
}
mysqli_stmt_bind_param($stmt,"ss",$userName,$email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;

}else{
    $result = false;
    return $result;
}
mysqli_stmt_close($stmt);

}


function createUser($conn,$email,$fullName,$userName,$password, $vkey){
    $stmt = mysqli_stmt_init($conn);
    $sql = "INSERT INTO users (userEmail,fullName,userName,userPassword,vkey) VALUES (?,?,?,?,?)  ;";
  
   if (!mysqli_stmt_prepare($stmt,$sql)) {
       header("location: ../signup.php?error=stmtFaild2");
       exit();
   }
$hashedPassword = password_hash($password,PASSWORD_DEFAULT);


   mysqli_stmt_bind_param($stmt,"sssss",$email,$fullName,$userName,$hashedPassword, $vkey);
   mysqli_stmt_execute($stmt); 

   mysqli_stmt_close($stmt);

//    header("location: ../login.php?error=signedin");
        header("location: ../thankyou-verification-page.php?error=signedin");
   exit();

   
   }


   function emptyInputLogin($email,$password){
    
        $result;
   
       if ( empty($email)||empty($password )) {
          $result= true; 
       }else{
           $result= false;
       }
       return $result;   
}



function loginUser($conn,$email,$password){

 $userIdExists = usernameExists($conn,$email,$email );

    if (!$userIdExists) {
       
        header("location: ../login.php?error=UserDoesNotExists");
        exit ();
        }
       
$pwdhash=$userIdExists["userPassword"];

$checkpwd=password_verify($password,$pwdhash);
    if (!$checkpwd) {
        header ("location:../login.php?error=wronglogin");
        exit (); 
    }
    
    elseif($checkpwd){
        session_start();
        // $_SESSION['login']="logedin";
        $_SESSION['userId']= $userIdExists["userId"];
        $_SESSION['adminOrNot']= $userIdExists["adminOrNot"];
        $_SESSION['userEmail']= $userIdExists["userEmail"];
        $_SESSION['userName']= $userIdExists["userName"];



        if ($userIdExists["adminOrNot"]===1) {
            header ("location:../adminPre/admin-home-page.php?error=successful");
        }
        else{
            header ("location:../bookSearch.php?error=successful");
        }
        
        exit (); 
            } 
}
