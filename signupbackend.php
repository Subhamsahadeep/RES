<?php
include "db.php";
$desig  = $_POST["designation"];
$f_name = $_POST["firstname"];
$l_name = $_POST["lastname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$repassword = $_POST["confirmpassword"];
$mobile = $_POST["mobileno"];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailvalidation = "/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(($desig == "") ||($f_name == "") || ($l_name == "") || ($email== "") || ($password== "") || 
   ($repassword== "") || ($mobile== "")  )
   {
	   echo "
	     <div class='alert alert-warning'>
		  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all the fields..!</b>
		 </div>
	   ";
	   exit();
   }
   
   else{
		   if(!preg_match($name,$f_name))
		   {
			   echo "
			   <div class='alert alert-warning'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>First Name :: $f_name is not valid..!</b>
		       </div>
			   ";
			   exit();
		   }
		   if(!preg_match($name,$l_name))
		   {
			   echo "
			   <div class='alert alert-warning'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Last Name :: $l_name is not valid..!</b>
		       </div>
			  ";
			   exit();
		   }
			  if(!preg_match($emailvalidation,$email))
		   {
			   
			   echo "
			   <div class='alert alert-warning'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Email :: $email is not valid..!</b>
		       </div>
			   ";
			   exit();
		   }
			 if(strlen($desig)>6)
		   {
			   echo "
			   <div class='alert alert-warning'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Designation must be within 6 characters..!</b>
		       </div>
			   ";
			   exit();
		   }
		   if(strlen($password)<6)
		   {
			   echo "
			   <div class='alert alert-warning'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password is weak Atleast 6 characters..!</b>
		       </div>
			   ";
			   exit();
		   }
		   if($password != $repassword){
			   echo "
			   <div class='alert alert-warning'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password is NOT SAME..!</b>
		       </div> 
			   ";
			   exit();
		   }
			if(!preg_match($number,$mobile))
		   {
			   echo "
			   <div class='alert alert-warning'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Mobile Number :: $mobile is not valid..!</b>
		       </div> 
			   ";
			   exit();
		   }
		   if(!(strlen($mobile) == 10)){
			   echo "
			    <div class='alert alert-warning'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Mobile number should be 10 digit..!</b>
		       </div>
			   ";
				exit();
		   }
		   
		   //existing email in our database;
		    $sql = "SELECT * FROM signup WHERE email = '$email'";
			$check_query = mysqli_query($con,$sql);
			if(mysqli_num_rows($check_query) > 0)
			{
				echo "
				<div class='alert alert-danger'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Email Address is already available , Please try again with another email..!</b>
		       </div>
				";
				exit();
			}
			else{
				$password = md5($password);
				$sql = "INSERT INTO `signup` (`designation`, `firstname`, `lastname`, `email`, `username`, `password`, `mobilenumber`)
				VALUES ('$desig', '$f_name', '$l_name', '$email', '$username', '$password', '$mobile')";
				$run_sql=mysqli_query($con,$sql);
				if($run_sql)
				{
					echo "
					<div class='alert alert-success'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>You are Registered Successfully....!</b>
		       </div>
					";
				}
				
			}
   }
?>