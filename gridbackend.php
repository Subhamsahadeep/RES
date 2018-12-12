<?php
include "db.php";
session_start();
if(isset($_POST["grid"])){
	$row=$_POST["row"];
	$col=$_POST["col"];
	$room=$_POST["room"];
	$adminid=$_SESSION['uid'];
	$colmeasure = 12/$col;
	$x=intval($colmeasure);
	$seatcol=$_POST["seatcol"];
	
	$sql = "SELECT * FROM classroom where room = '$room' and adminid='$adminid'";
	$check_query = mysqli_query($con,$sql);
			if(mysqli_num_rows($check_query) < 1)
			{
			$sql = "INSERT INTO `classroom` (`adminid`,`room`, `col`, `row`, `seat`)
				VALUES ('$adminid', '$room', '$col', '$row', '$seatcol')";
				$run_sql=mysqli_query($con,$sql);
				if($run_sql)
				{
					for($k=1;$k<=$col;$k++)
					{
		
			echo "<div class='col-md-".$x."'>";
			for ($i = 1; $i <= $row; $i++) {
			  for ($j = 1; $j <= $seatcol; $j++) {
			    //echo "|-|";
			    echo"<button type='button' id='C".$k."R".$i."S".$j."' onClick='changeColor(this)' style='background-color: red;
			    border: none; outline:none;' class='btn-sm'></button> ";

			  }
			  echo "<br/>";
			}

			echo"</div>";
		
				}
			}

		$sql = "SELECT * FROM classroom where room = '$room' and adminid='$adminid'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count == 1)
		{		$row = mysqli_fetch_array($run_query);
				$_SESSION["classid"]=$row["classid"];
			
		}


		}
		else
		{
			echo "
					<div class='alert alert-danger'>
		       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Room Registered Already....!</b>
		       </div>
					";
		}

	

}

?>