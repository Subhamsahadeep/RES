<?php
include "db.php";
session_start();

	if(isset($_POST["userLogin"])){
		$username = $_POST["username"];
		$password = md5($_POST["userpassword"]);
		$sql = "SELECT * FROM signup WHERE username='$username' and password='$password'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count == 1)
		{		$row = mysqli_fetch_array($run_query);
				$_SESSION["uid"]=$row["id"];
				$_SESSION["name"]=$row["firstname"];
				echo "true";
			
		}
		else{
			echo"Failed to connect";
		}
		
	}
?>