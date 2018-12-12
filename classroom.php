<?php
session_start();
if(!isset($_SESSION["uid"])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grid</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="ajaxcall.js"></script>
       
</head>
<style>
.navbar-nav li a:hover{
     color: #fff !important;
      background-color: #000 !important;
 }
 .navbar-nav li.active a {
      color: #fff !important;
      background-color: #191970 !important;
  }
	 #mycontainer{
    margin-top: 5%;
   
}
</style>
<body onLoad="myfunc()">
	     <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="#" class="navbar-brand" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right" >
        <li><a href="profile.php">SUBJECTS</a></li>
        <li  class="active"><a href="classroom.php">CLASSROOMS</a></li>
        <li><a href="takeclass.php">TAKE CLASS</a></li>
        <li><a href="grid.php" >GRID</a></li>
        <li ><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>


 <div class="container" id="mycontainer">
  <div class="list-group" id="tlistdisplay">
  	<!--  display here -->
  </div>
</div>
 <div class="container">
 	<div class="row" id="displayclass">
 		
 	</div>
 </div>

</body>
</html>