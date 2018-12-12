<?php
include "db.php";
if(isset($_POST["classroom"])){
		//$password = md5($_POST["userpassword"]);
	$row=$_POST["row"];
	$col=$_POST["col"];
	$room=$_POST["room"];
	$seat=$_POST['seat'];
	$colmeasure = 12/$col;
	$x=intval($colmeasure);
	for($k=1;$k<=$col;$k++)
	{
			echo "<div class='col-md-".$x."'>";
			for ($i = 1; $i <= $row; $i++) {
			  for ($j = 1; $j <= $seat; $j++) {
			    //echo "|-|";
			    echo"<button type='button' id='C".$k."R".$i."S".$j."' onClick='changeColor(this)' style='background-color: red;
			    border: none; outline:none;' class='btn-sm'></button> ";

			  }
			  echo "<br/>";
			}

			echo"</div>";
		
		
	}
	//echo "hey";
	}
?>