<?php

$servername = "localhost";
$username = "root";
$password = "Subhamsa1@";
$db = "res";

//create connection
$con = mysqli_connect($servername, $username, $password, $db);

//check Connection
if(!$con)
{
	die("Connection failed : ".mysqli_connect_error());
}

?>