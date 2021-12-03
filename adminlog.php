<?php

$email=$_POST["email"];
$password=$_POST["password"];

//login database

$con=new mysqli('localhost','root','','assignment');
if($con->connect_error)
{
    die("failed connection:".$con->connect_error);   //conn fail
}
else
{
  $stmt=$con->prepare("select * from admin where username=?");
  $stmt->bind_param("s",$email);   //binding parameter
  $stmt->execute(); // execute
  $stmt_result=$stmt->get_result();
  if($stmt_result->num_rows>0){
    $data=$stmt_result->fetch_assoc();
      if($data['password']==$password){
        header('location:view.php');
      }else{
        echo "invalid email and password";
      }
  }else{
    echo "invalid inputs";
  }
}
?>