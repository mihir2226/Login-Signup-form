<?php
function emptyInputSignup($conn,$name,$email,$username,$pwd,$fneNumber){
  $result;
  if(empty($name)||empty($email)||empty($username)||empty($pwd)||empty($fneNumber)) {
    $result = true;
  }
  else {
    $result =false;
}
return $result;
}

function invalidUid($username){
  $result;
  if(preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    $result = true;
  }
  else {
    $result =false;
}
return $result;

function invalidEmail($Email){
  $result;
  if(!filter_var($Email),FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result =false;
}
return $result;

function pwdMatch($Pwd,$repeatpwd){
  $result;
  if($pwd!==$pwdRepeat)) {
    $result = true;
  }
  else {
    $result =false;
}
return $result;

function uidExists($conn,$username,$email){
  $sql="SELECT * FROM users WHERE userUid =? OR usersEmail=?;";
  $stmt = mysqli_stmt_init($conn);
  if(mysqli_stmt_prepare($stmt,$sql)){
    header("location:..//SignUp.html?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt,"ss",$username,$email);
  mysqli_stmt_execute($stmt);
  $resultData = mysqli_stmt_get_result($stmt);
  if($row = mysqli_fetch_assoc($resultData)){


  return $row;
}
  }
  else{
    $result =  false;
    return $result;
  }
  mysqli_stmt_close($pwd,PASSWORD_DEFAULT);
}
function createUser($conn,$name,$email,$username,$pwd,$fneNumber){
  $sql="INSERT INTO users(usersNAME,userEMAIL,usersFNENUM,usersUID,usersPWD) VALUES (?,?,?,?,?)";
  $stmt = mysqli_stmt_init($conn);
  if(mysqli_stmt_prepare($stmt,$sql)){
    header("location:..//SignUp.html?error=stmtfailed");
    exit();
  }
  $hashedPwd = password_hash();
  mysqli_stmt_bind_param($stmt,"sssss",$username,$email,$name,$hashedPwd,$fneNumber);
  mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location:..//SignUp.html?error=none");
exit();
}
?>
