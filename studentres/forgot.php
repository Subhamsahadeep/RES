<?php

 $con=mysqli_connect("localhost", "root", "Subhamsa1@", "res"); 
 $email = $_POST['email'];
 $sql = mysqli_prepare($con,"select name, email from user_detail where email = ?");
 mysqli_stmt_bind_param($sql,"s",$email);
 mysqli_stmt_execute($sql);
 mysqli_stmt_store_result($sql);
 mysqli_stmt_bind_result($sql,$name,$email);
 $response=array();
 $response["success"]=false;
 while(mysqli_stmt_fetch($sql)){
	$response["success"]=true;

 }
echo json_encode($response);
?>