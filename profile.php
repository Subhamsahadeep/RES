<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!doctype html>
<html>
<head>
	<title>RAPID EVALUATION SYSTEM- Profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="profilecss.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="ajaxcall.js"></script>
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
@media screen and (max-width: 600px) {
  #logout{
  	float:right;
  }
  }
</style>
<body>
		<!--<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header" style="width:100%;">
				  <a href="#" class="navbar-brand" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
				  <div id="logout" >
				  <li><a href="logout.php"  class="navbar-brand" style="float:right;"><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
				  </div>
				</div>
				  
			</div>	
		</div>
    -->
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
        <li class="active"><a href="profile.php">SUBJECTS</a></li>
        <li><a href="classroom.php">CLASSROOMS</a></li>
        <li><a href="takeclass.php">TAKE CLASS</a></li>
        <li><a href="grid.php">GRID</a></li>
        <li ><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
	<div class="container-fluid" id="mycontainer">
	<div class= "row">
		
		<div class="col-md-4" id="secondcol">
			<div class="row">
				<div class="col-md-12">
					 <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-file">
                            </span>Enter your Subject ::</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
								  <div class="form-group">
                                        <label for="generic">Subject </label>
                                         <input type="text" class="form-control" id='subjectname' placeholder="Subject Name" required />
                                    </div>
                        </div>
                    </div>
                </div>
                
                <button type="button" id="addbtn" style="margin-top:10px;float:right;background-color:#8b0000;color:#ffffff;" class="btn btn-primary btn-md btn btn-danger">ADD</button>
      </div>          	
				</div>
				
			</div>
		</div>
        <div class="col-md-4" id="displaymsg"></div>
		<div class="col-md-4">
      <table class="table table-striped">
    <thead>
      <tr>
        <th>Subject Name</th>
        <th>Status</th>
        <th>Trash</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody id="tbodydisplay">
    </tbody>
  </table>
        </div>
	</div>	
	</div>





</body>
</html>