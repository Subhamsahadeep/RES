<?php
include "db.php";
session_start();
if (isset($_POST["subject"])) {
	//$subjectname = $_POST["subjectname"];
	$adminid = $_SESSION["uid"];
	//echo $adminid;
	$i=0;
	$sql = "SELECT * FROM subject where adminid = '$adminid'";
	$check_query = mysqli_query($con,$sql);

	$sql1 = "SELECT COUNT(*) FROM subject where adminid = '$adminid' and active=1";
	$check_query1 = mysqli_query($con,$sql1);
	$result = mysqli_fetch_array($check_query1);
	$total = $result[0];
	if($total < 2){


			if(mysqli_num_rows($check_query) > 0)
			{
				while($row = mysqli_fetch_array($check_query)) {
									$sub = $row['subjectname'];
									$admin = $row['adminid'];
									$actv = $row['active'];
				                    if($actv == 1)
									{
										    echo "<tr><td>".$row['subjectname']."</td>
 							  		<td>".$row['active']."</td>
 							  		<td><button type='button' id='editbtn".$i."' subjectname='".$sub."' adminid='".$admin."' class='btn btn-danger btn-xs' onClick='remove(this)'><span class='glyphicon glyphicon-trash'></span></button></td>
 							  		<td><span class='glyphicon glyphicon-play' id='activebtn".$i."' subjectname='".$sub."' adminid='".$admin."' onClick='active(this)'></span></td>
 							  		</tr>
 							  ";
									}
									else
									{
										echo "<tr><td>".$row['subjectname']."</td>
 							  		<td>".$row['active']."</td>
 							  		<td><button type='button' id='editbtn".$i."' subjectname='".$sub."' adminid='".$admin."' class='btn btn-danger btn-xs' onClick='remove(this)'><span class='glyphicon glyphicon-trash'></span></button></td>
 							  		<td><span class='glyphicon glyphicon-stop' id='activebtn".$i."' subjectname='".$sub."' adminid='".$admin."' onClick='active(this)'></span></td>
 							  		</tr>
 							  ";
									}
				                    
 							  $i++;
					//echo"<tr><td>".$row['subjectname']."</td></tr>";
		    }
		}
		
	
}

else{
	echo"you can active only one class at a time";
}


}

?>