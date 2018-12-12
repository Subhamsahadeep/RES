<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
header("location:login.php");

?>