<?php
include "db.php";
session_start();
if (isset($_POST["makeclass"])) {
	$subjectname = $_POST["subjectname"];
	$subjectid = $_POST["subjectid"];
	$room = $_POST["room"];
	$classid = $_POST["classid"];
	$row1 = $_POST["row"];
	$col = $_POST["col"];
	$seat = $_POST["seat"];
$colmeasure = 12/$col;
$x=intval($colmeasure);
	$adminid = $_SESSION["uid"];
	//echo $adminid;
	$i=0;
	$curdate = date("Y-m-d");
	
	$tablename= $curdate."-Table-".$subjectname."-".$room."-".$adminid;
//	echo $tablename;

	$sql = "CREATE TABLE `".$tablename."`(
sessiontableid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
reg_date DATE,
currentadmimid INT(11) NOT NULL,
room VARCHAR(30) NOT NULL,
subject VARCHAR(50),row INT(10),col INT(10), seat INT(10) 
)";
	if (mysqli_query($con, $sql)) {
    $sql1 = "INSERT INTO `".$tablename."` (reg_date, currentadmimid, room, subject, row, col, seat)
			VALUES ('$curdate', '$adminid', '$room', '$subjectname','$row1', '$col', '$seat')";
			if ($con->query($sql1) === TRUE) {
				   // echo "<div class='row'><div class='col-md-2'></div><div class='col-md-3'>" . $subjectname . "</div><div class='col-md-3'>" . $room . "</div><div class='col-md-3'>" . $curdate . "</div><div class='col-md-1'></div></div>
				    //";
				  
				    for($k=1;$k<=$col;$k++)
					{
		
			echo "<div class='col-md-".$x."'>";
				    for ($i = 1; $i <= $row1; $i++) {
			  for ($j = 1; $j <= $seat; $j++) {
			    //echo "|-|";
			    echo"<button type='button' id='C".$k."R".$i."S".$j."' onClick='changeColor(this)' style='background-color: red;
			    border: none; outline:none;' class='btn-sm'></button>";

			  }
			  echo "<br/>";
			}
			echo"</div>";
		
				}

				} else {
				    echo "Error: " . $sql1 . "<br>" . $con->error;
				}
	}
	 else {
			    echo "Error creating table: " . mysqli_error($con);
			}
}
?>