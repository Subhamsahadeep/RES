<?php
include "db.php";
if(isset($_POST["subject"])){
		//$password = md5($_POST["userpassword"]);
		$sql = "SELECT * FROM classroom";
		$check_query = mysqli_query($con,$sql);

		$sql1 = "SELECT * FROM subject where active=1";
		$check_query1 = mysqli_query($con,$sql1);
		
		$subjectid = 6;
		$subject = "asx";


		echo"
			<div class='col-md-4' id='firstcol'>
		";
			if(mysqli_num_rows($check_query1) > 0)
			{
				echo "  <div class='card text-center'>
			   <div class='card-header'>
	            <h2>Active Subjects</h2> 
			     </div>";

				while($row = mysqli_fetch_array($check_query1)) {

						global $subjectid, $subject;

									$subjectid = $row['subjectid'];
									$adminid = $row['adminid'];
									$subject = $row['subjectname'];
									$active = $row['active'];
									
									echo "
											  <div class='card-body'>
											    <span align='center' class='btn btn-primary btn-danger btn-md' style='width:100px;'>".$subject."</span>
											    <p>

											  </div>
											 
											
									";

					//echo"<tr><td>".$row['subjectname']."</td></tr>";
		    }
		    echo "</div>";
		}
		echo "</div>";

		

		echo"
		
			<div class='col-md-4'></div>
		
			<div class='col-md-4' id='secondcol'>
		";

			if(mysqli_num_rows($check_query) > 0)
			{
				echo "  <div class='card text-center'>
			   <div class='card-header'>
	            <h2>Classrooms</h2> 
			     </div>";

				while($row = mysqli_fetch_array($check_query)) {

						global $subjectid, $subject;
						
									$classid = $row['classid'];
									$room = $row['room'];
									$col = $row['col'];
									$row1 = $row['row'];
									$seat = $row['seat'];

									echo "
											  <div class='card-body'>
											    <span align='center' class='btn btn-primary btn-success btn-md' style='width:100px;' row=".$row1." col=".$col." seat=".$seat." classid=".$classid." room=".$room."
											    subjectid=".$subjectid." subjectname=".$subject."
											    onClick='selectsubjectandclass(this)'>".$room."</span>
											    <p>

											  </div>
											 
											
									";

					//echo"<tr><td>".$row['subjectname']."</td></tr>";
		    }
		}
		echo "</div";
		
	}


?>