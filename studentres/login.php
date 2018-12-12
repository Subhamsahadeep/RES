<?php

 $con=mysqli_connect("localhost", "root", "Subhamsa1@", "res"); 
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $sql = mysqli_prepare($con,"select name, username, password from user_detail where username = ? and password = ?");
 mysqli_stmt_bind_param($sql,"ss",$username,$password);
 mysqli_stmt_execute($sql);
 mysqli_stmt_store_result($sql);
 mysqli_stmt_bind_result($sql,$name,$username,$password);
 $response=array();
 $response["success"]=false;
 while(mysqli_stmt_fetch($sql)){
	$response["success"]=true;
	$response["name"]=$name;
 }
echo json_encode($response);
?>