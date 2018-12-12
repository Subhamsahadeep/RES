<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $name = $_POST['name'];
 $rollno = $_POST['rollno'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 require_once('dbCon.php');
 $sql = "insert into user_detail (name,rollno,email,phone,username,password) values ('$name','$rollno','$email','$phone','$username','$password')";

 if(mysqli_query($con,$sql))
{
 echo 'Registration done.Login to view classes';
}
else
{
 echo 'Something went wrong';
 }
 }
 else
 {
  echo 'Error';
 }

?>