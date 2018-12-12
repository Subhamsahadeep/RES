<?php
include "db.php";
session_start();
if (isset($_POST["subject"])) {
	$subjectname = $_POST["subjectname"];
	$adminid = $_SESSION["uid"];
	//echo $adminid;
	$sql = "SELECT * FROM subject WHERE subjectname = '$subjectname' and adminid='$adminid'";
	$check_query = mysqli_query($con,$sql);
			if(mysqli_num_rows($check_query) > 0)
			{
				echo "<div class='alert alert-danger'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Subject is already available , Please try again with another subject..!</b>
		       </div>";
		       exit();
			}
			else{
				$sql = "INSERT INTO `subject` (`adminid`, `subjectname`)
				VALUES ('$adminid', '$subjectname')";
				$run_sql=mysqli_query($con,$sql);
				if($run_sql)
				{
					
						echo "<div class='alert alert-success'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Inserted</b>
		       </div>";
				}
			}
	
}
?>