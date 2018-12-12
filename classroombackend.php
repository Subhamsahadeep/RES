<?php
include "db.php";
if(isset($_POST["classroom"])){
		//$password = md5($_POST["userpassword"]);
		$sql = "SELECT * FROM classroom";
		$check_query = mysqli_query($con,$sql);

		$sql1 = "SELECT * FROM subject where active=1";
		$check_query1 = mysqli_query($con,$sql1);
		
			if(mysqli_num_rows($check_query) > 0)
			{
				while($row = mysqli_fetch_array($check_query)) {

						
									$classid = $row['classid'];
									$room = $row['room'];
									$col = $row['col'];
									$row1 = $row['row'];
									$seat = $row['seat'];

									echo "<div style='width:100%;margin-bottom:5px;'>
									<button type='button' class='btn btn-warning' style='width:5%;height:40px;' classid1='".$classid."' room1='".$room."' column1='".$col."' row1='".$row1."' seat1='".$seat."' onClick='selectedit(this)'><span class='glyphicon glyphicon-edit'></span></button>
										<a href='#'' class='list-group-item' style='background-color:#FFF2CC; width:90%;height:40px; margin-left:5%;margin-top:-3.5%;' classid='".$classid."' room='".$room."' column='".$col."' row='".$row1."' seat='".$seat."' onClick='selectclass(this)'>
     									 <h4 class='list-group-item-heading' style='text-align:center;'> CLASSROOM :: ".$room." => col :: ".$col." || row ::".$row1." || seat :: ".$seat."</h4>
   										 </a>
   										 <button type='button'  style='background-color:#d99f0d;border:none;outline:none;width:5%;height:40px;float:right;margin-top:-3.4%;' classid1='".$classid."' room1='".$room."' column1='".$col."' row1='".$row1."' seat1='".$seat."' onClick='takeclass(this)'><span class='glyphicon glyphicon-hand-right'></span></button>
   										 </div>
   										 
									";

					//echo"<tr><td>".$row['subjectname']."</td></tr>";
		    }
		}
		
	}
?>