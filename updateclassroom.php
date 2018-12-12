<?php
include "db.php";
session_start(); 
           if(isset($_POST["classroom"]))
            {
              $classid=$_POST["classid"];
              $row=$_POST["row"];
              $col=$_POST["col"];
              $room=$_POST["room"];
              $seat=$_POST["seat"];
          echo"
          <div class='col-md-3'></div>
          <div class='col-md-6'>
          <form id='gridform'>
          <input type='number' class='form-control' id='classidvalue' value='".$classid."' style='display:none;'>
           Room No:: <input type='number' class='form-control' id='roomupdateclass' name='room' placeholder='".$room."'>
           Column:: <input type='number' class='form-control' id='colupdateclass' name='col' placeholder='".$col."'>
           Row:: <input type='number' class='form-control' id='rowupdateclass' name='row' placeholder='".$row."'>
           Seat:: <input type='number' class='form-control' id='seatupdateclass' name='seat' placeholder='".$seat."'>
               <button onCLick='updateclass();' class='btn btn-primary' style='margin-top:5px; float :right' type='submit'>Update</button>
                <button onCLick='cancelclass();' class='btn btn-primary' style='margin-top:5px; float :left' type='submit'>Cancel</button>
               </div>
               <div class='col-md-3'></div>
           ";
  }
   if(isset($_POST["cancelupdate"]))
            {
              
          echo"";
  }
 if(isset($_POST["classroomupdate"]))
            {
              $classid=$_POST["classid"];
              $row=$_POST["row"];
              $col=$_POST["col"];
              $room=$_POST["room"];
              $seat=$_POST["seat"];
              //$classid = $_SESSION['classid'];

            $sql = "UPDATE `classroom` SET room='$room',col='$col',row='$row',seat='$seat' where  classid='$classid' ";
        $run_sql=mysqli_query($con,$sql);
        if($run_sql)
        {
          
      echo"";
    }
  }
        
?>