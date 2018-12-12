<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>

<!doctype html>
<html>
<head>
	<title>RAPID EVALUATION SYSTEM- LOGIN</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="ajaxcall.js"></script>
</head>
<body id="mybody">
	<div class="container" id="mycontainer">
	<div class= "row">
		<div class="col-md-3"></div>
		<div class="col-md-6" id="secondcol">
			<div class="myform">

			<center><h2 style="font-family:fantasy;">Login</h2></center>

			<form id="myform">
			<div class="username">
				<label id="user1" for="username">Username</label>
				<input id="user2" class="form-control" type="text" name="username" autocomplete="off" placeholder="Enter your username" required>
			</div>
			
			<div class="pass">
				<label id="pass1" for="password">Password</label>
				<input id="pass2"class="form-control"type="password" name="password" autocomplete="off" placeholder="Enter your Password" required>
			</div>
			<div class="buttonsofforms">
			     <button id="loginbtn" class="btn btn-success" type="submit" class="loginbtn">Login</button>
 			</div>
 			<br>
 			<br>
 			<div id="forgetpass">
 				<a href="changepass.php">Forget Password</a>
 			</div>
 			<div id="clicktosignup">
 				Donot have any account? Then Click here to <a href="signup.php">SignUp</a>
 			</div>
			</form>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>	
	</div>


</body>
</html>