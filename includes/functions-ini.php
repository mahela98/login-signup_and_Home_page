<?php

echo "functions loaded";
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


function createUser($conn,$email,$fullName,$userName,$password){
    $stmt = mysqli_stmt_init($conn);
    $sql = "INSERT INTO users (userEmail,fullName,userName,userPassword) VALUES (?,?,?,?)  ;";
  
   if (!mysqli_stmt_prepare($stmt,$sql)) {
       header("location: ../signup.php?error=stmtFaild2");
       exit();
   }
$hashedPassword = password_hash($password,PASSWORD_DEFAULT);


   mysqli_stmt_bind_param($stmt,"ssss",$email,$fullName,$userName,$hashedPassword);
   mysqli_stmt_execute($stmt); 

   mysqli_stmt_close($stmt);

   header("location: ../index1.php?signin=successfull");
   exit();

   
   }