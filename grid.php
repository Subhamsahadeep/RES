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
       
</head>
<style type="text/css">
    #room,#cols,#row,#seatpercol,#gridbtn{
      margin: 1%;
    }
    #mycontainer{
    margin-top: 5%;
   
}
 .navbar-nav li a:hover{
     color: #fff !important;
      background-color: #000 !important;
 }
 .navbar-nav li.active a {
      color: #fff !important;
      background-color: #191970 !important;
  }
</style>
<body>
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
        <li><a href="classroom.php">CLASSROOMS</a></li>
        <li><a href="takeclass.php">TAKE CLASS</a></li>
        <li class="active"><a href="grid.php" >GRID</a></li>
        <li ><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container" id="mycontainer">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form id="gridform">
            <input type="number" class="form-control" id="room" name="room" placeholder="Room No">
            <input type="number" class="form-control" id="cols" name="cols" placeholder="No. of cols">
            <input type="number" class="form-control" id="row" name="row" placeholder="No. of Rows">
            <input type="number" class="form-control" id="seatpercol" name="seatpercol" placeholder="No. of seat per col">
            <button id="gridbtn" class="btn btn-primary" type="submit">Submit</button>

        </form>
        </div>
        <div class="col-md-3"></div>

</div>
</div>

 <div class="container">
    <div class="row">
     
 
     <div id="display"></div>

</div>
</div>
 <script type="text/javascript" src="ajaxcall.js"></script>
</body>
</html>