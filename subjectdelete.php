<?php
include "db.php";
session_start();
if (isset($_POST["subject"])) {
	$subjectname = $_POST["subjectname"];
	$adminid = $_SESSION["uid"];
	//echo $adminid;

	$sql = "DELETE FROM subject where subjectname='$subjectname' and adminid = '$adminid'";
	if (mysqli_query($con, $sql)) {
    $i=0;
	$sql1 = "SELECT * FROM subject where adminid = '$adminid'";
	$check_query = mysqli_query($con,$sql1);
			if(mysqli_num_rows($check_query) > 0)
			{
				while($row = mysqli_fetch_array($check_query)) {
									$sub = $row['subjectname'];
									$admin = $row['adminid'];
				                    echo "<tr><td>".$row['subjectname']."</td>
 							  		<td>".$row['active']."</td>
 							  		<td><button type='button' id='editbtn".$i."' subjectname='".$sub."' adminid='".$admin."' class='btn btn-danger btn-xs' onClick='remove(this)'><span class='glyphicon glyphicon-trash'></span></button></td>
 							  		<td><span class='glyphicon glyphicon-stop'  id='activebtn".$i."' subjectname='".$sub."' adminid='".$admin."' onClick='active(this)'></span></td>
 							  		</tr>
 							  ";
 							  $i++;
					//echo"<tr><td>".$row['subjectname']."</td></tr>";
		    }
		}
	}
	
	
}
?>