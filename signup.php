<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}

?>

<!doctype html>
<html>
<head>
	<title>RAPID EVALUATION SYSTEM- SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="ajaxcall.js"></script>
</head>
<body id="mybody">
	<div class="container" id="mycontainer">
							 <div class="row">
									<div class="col-md-3"></div>
									<div class = "col-md-6" id="signup_msg">
									<!--< Sign Up msg is shown here>-->
									</div>
									<div class="col-md-3"></div>
							  </div>
	<div class= "row">
		<div class="col-md-3"></div>
		<div class="col-md-6" id="secondcol">
			<div class="myform">

			<center><h2 style="font-family:fantasy;">SignUp</h2></center>

			<form method="post" id="myform">
			<div class="desig">
				<label id="desig1" for="designation">Designation</label>
				<input id="desig2" class="form-control" type="text" name="designation" placeholder="Enter your Designation" required>
			</div>
			<div class="firstname">
				<label id="fn1" for="firstname">First Name</label>
				<input id="fn2" class="form-control" type="text" name="firstname" placeholder="Enter your First name" required>
			</div>
			<div class="lastname">	
				<label id="ln1" for="lastname">Last Name</label>
				<input id="ln2" class="form-control" type="text" name="lastname" placeholder="Enter Your Last Name" required>
			</div>
			<div class="email">
				<label id="email1" for="email">Email</label>
				<input id="email2" class="form-control"type="text" name="email" placeholder="Enter your Email-id" required>
			</div>
			<div class="username">
				<label id="user1" for="username">Username</label>
				<input id="user2" class="form-control" type="text" name="username" placeholder="Enter your username" required>
			</div>
			
			<div class="pass">
				<label id="pass1" for="password">Password</label>
				<input id="pass2"class="form-control"type="password" name="password" placeholder="Enter your Password" required>
			</div>
			<div class="confirmpass">
				<label id="confirmpass1" for="mobileno">Confirm Password</label>
				<input id="confirmpass2"class="form-control"type="password" name="confirmpassword" placeholder="Enter your Confirm Password" required>
			</div>
			<div class="mobileno">
				<label id="mobileno1" for="mobileno">Mobile Number</label>
				<input id="mobileno2"class="form-control"type="Number" name="mobileno" placeholder="Enter your Mobile No" required>
			</div>
			<div class="buttonsofforms">
			     <button id="cancelbtn" class="btn btn-danger" type="button" class="cancelbtn">Clear</button>
			     <button id="signupbtn" class="btn btn-success" type="submit" class="signupbtn">Sign Up</button>
 			</div>
 			<br>
 			<br>
 			<div id="clicktologin">
 				Already have an account? Then Click here to <a href="login.php">LOGIN</a>
 			</div>
			</form>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>	
	</div>


</body>
</html>