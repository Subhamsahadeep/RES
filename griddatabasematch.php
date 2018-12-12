<?php
include "db.php";
//session_start();

	if(isset($_POST["grid"])){
		$crs = $_POST["id"];
		//$password = md5($_POST["userpassword"]);
		$sql = "SELECT * FROM grid WHERE crs='$crs' and flag=1";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count == 1)
		{		$row = mysqli_fetch_array($run_query);
				echo "1";
			
		}
		else{
			echo"Student is not yet Present";
		}
		
	}
?>