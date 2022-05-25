<?php
if(isset($_POST["submit"])){
$name=$_POST['name'];
$Email=$_POST['Email'];
$username=$_POST['uid'];
$Pwd=$_POST['Password'];
$repeatpwd=$_POST['Repeat Password'];
$fneNumber=$_POST['Mobile number'];
require_once 'DB.includes.php'; // This Database php file
require_once 'Signup-customer-function.includes.php'; // Function
if(emptyInputSignup($name,$Email,$username,$Pwd,$repeatpwd,$fneNumber)!==false){
  header("location:..//SignUp.html?error=emptyinput");
  exit();
}
if(invalidUid($username)!==false){
  header("location:..//SignUp.html?error=invalidusername");
  exit();
}
if(invalidEmail($Email)!==false){
  header("location:..//SignUp.html?error=invalidEmail");
  exit();
}

if(pwdMatch($Pwd,$repeatpwd)!==false){
  header("location:..//SignUp.html?error=Passwordsdontmatch");
  exit();
}
if(invalidFneNumber($fneNumber)!==false){
  header("location:..//SignUp.html?error=invalidMobilenumber");
  exit();
}

if(uidExist($conn,$username)!==false){
  header("location:Signup.html?error=UsernameTaken");
  exit();

}
createUser($conn,$name,$email,$username,$pwd,$fneNumber);

else {
  header("location:..//SignUp.html");
  exit();
} ?>
