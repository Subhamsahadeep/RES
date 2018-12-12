function changeColor(clickedElement){
    var theId = clickedElement.id;
    alert(theId);
    $.ajax({
			url     : "griddatabasematch.php",
			method    : "POST",
			data    : {grid:1,id:theId},
			success : function(data){
					if(data == "1")
					{
						document.getElementById(theId).style.background = "green";
					}
					else
					{
						alert(data);
					}
				}
				
			})

    
}

function selectsubjectandclass(clickedElement){
    var subjectname = clickedElement.getAttribute("subjectname");
    var subjectid = clickedElement.getAttribute("subjectid");
    var room = clickedElement.getAttribute("room");
    var classid = clickedElement.getAttribute("classid");
    var row = clickedElement.getAttribute("row");
    var col = clickedElement.getAttribute("col");
    var seat = clickedElement.getAttribute("seat");


   // alert("subject :: "+subjectname + "::"+subjectid+" and  ROOM ::"+room);
     var conf = confirm('Are you sure want to select this classroom ?');
   if(conf)
      {
      	   $.ajax({
			url     : "makeclassroomtable.php",
			method    : "POST",
			data    : {makeclass:1,subjectid:subjectid,room:room,classid:classid,subjectname:subjectname,row:row,col:col,seat:seat},
			success : function(data){
					//window.location.href = "showdata.php";
					$("#showclassroom").html(data);
				}	
			})
      }


    
}

         $.ajax({
				url : "subjectbackenddisplaystart.php",
				method : "POST",
				data : {subject : 1},
				success : function(data){
					$("#tbodydisplay").html(data);}
				})

function remove(clickedElement){
	var subjectname = clickedElement.getAttribute("subjectname");
	//var adminid = clickedElement.getAttribute("adminid");
	//alert(subjectname+"::"+adminid);
	$.ajax({
				url : "subjectdelete.php",
				method : "POST",
				data : {subject : 1,subjectname:subjectname},
				success : function(data){
								$("#tbodydisplay").html(data);
								$("#subjectname").val("");
							
				}
			})
}
function active(clickedElement){
	var subjectname = clickedElement.getAttribute("subjectname");
	var spanID =  clickedElement.id;
	//alert(subjectname);
	var spanid = document.getElementById(spanID).className; 

	if(spanid == "glyphicon glyphicon-play")
	{
		
				$.ajax({
				url : "subjectupdate.php",
				method : "POST",
				data : {subjectupdate1:1,subjectname:subjectname},
				success : function(data){
								$("#tbodydisplay").html(data);
								$("#subjectname").val("");
								document.getElementById(spanID).className= "glyphicon glyphicon-stop";
							
				}
			})

	}
	else if(spanid == "glyphicon glyphicon-stop")
	{
		
			$.ajax({
				url : "subjectupdate2.php",
				method : "POST",
				data : {subjectupdate2:1,subjectname:subjectname},
				success : function(data){
								$("#tbodydisplay").html(data);
								$("#subjectname").val("");
							document.getElementById(spanID).className= "glyphicon glyphicon-play";
				}
			})
	}
}
function myfunc(){
	$.ajax({
				url : "classroombackend.php",
				method : "POST",
				data : {classroom:1},
				success : function(data){
								$("#tlistdisplay").html(data);
								
				}
			})

}
function myfunctakeclass(){
	$.ajax({
				url : "takeclassdisplay.php",
				method : "POST",
				data : {subject:1},
				success : function(data){
								$("#displaytakeclass").html(data);
				}
			})
	
}

function selectclass(clickedElement){
var room = clickedElement.getAttribute("room");
var col = clickedElement.getAttribute("column");
var row = clickedElement.getAttribute("row");
var seat = clickedElement.getAttribute("seat");
//lert("hey");
$.ajax({
				url : "classroombackenddisplay.php",
				method : "POST",
				data : {classroom:1,room:room,col:col,row:row,seat:seat},
				success : function(data){
								$("#displayclass").html(data);
								
				}
			})

}
function selectedit(clickedElement){
var classid = clickedElement.getAttribute("classid1");
var room = clickedElement.getAttribute("room1");
var col = clickedElement.getAttribute("column1");
var row = clickedElement.getAttribute("row1");
var seat = clickedElement.getAttribute("seat1");


$.ajax({
				url : "updateclassroom.php",
				method : "POST",
				data : {classroom:1,classid:classid,room:room,col:col,row:row,seat:seat},
				success : function(data){
								$("#displayclass").html(data);
								
				}
			})
}
function updateclass(){
var classid = document.getElementById("classidvalue").value;
var room = document.getElementById("roomupdateclass").value;
var col = document.getElementById("colupdateclass").value;
var row = document.getElementById("rowupdateclass").value;
var seat = document.getElementById("seatupdateclass").value;
//alert(classid);
if(room == "" || row=="" || col=="" || seat=="")
{
	alert("Fill all the blanks");
	selectedit();
}
else
{

	$.ajax({
				url : "updateclassroom.php",
				method : "POST",
				data : {classroomupdate:1,classid:classid,room:room,col:col,row:row,seat:seat},
				success : function(data){
								$("#displayclass").html(data);
								myfunc();
				}
			})
}

}
function cancelclass(){
$.ajax({
				url : "updateclassroom.php",
				method : "POST",
				data : {cancelupdate:1},
				success : function(data){
								$("#displayclass").html(data);
								
				}
			})
}
$(document).ready(function(){

		$("#gridbtn").click(function(event){
			//alert("hey");
			event.preventDefault();
			var room=$("#room").val();
			var row=$("#row").val();
			var col=$("#cols").val();
			var seatcol=$("#seatpercol").val();
			//alert(row +"::"+col);
			$.ajax({
			url     : "gridbackend.php",
			method    : "POST",
			data    : {grid:1,row:row,col:col,seatcol:seatcol,room:room},
			success : function(data){
					$("#display").html(data);
				}
				
			})
		})
		

		$("#signupbtn").click(function(event){
			//alert("hey");
			event.preventDefault();
			$.ajax({
			url     : 'signupbackend.php',
			method    : 'POST',
			data    : $("form").serialize(),
			success : function(data){
					$("#signup_msg").html(data);
				}
				
			})
			
		})

		$("#cancelbtn").click(function(event){

			event.preventDefault();
			
		document.getElementById("myform").reset();
			
		})
	
	
		$("#loginbtn").click(function(event){
			event.preventDefault();
			//alert("ram");
			var username = $("#user2").val();
			var pass = $("#pass2").val();
			
			$.ajax({
				url : "loginbackend.php",
				method : "POST",
				data : {userLogin : 1,username:username,userpassword:pass},
				success : function(data){
					if(data == "true")
					{
						window.location.href = "profile.php";
					}
					else
					{
						alert(data);
					}
					
				}
			})
		})

		$("#addbtn").click(function(event){
			event.preventDefault();
			var subjectname = $("#subjectname").val();
			if(subjectname=="")
			{
				alert("fill the subject field");
			}
			else
			{
				$.ajax({
					url : "subjectbackend.php",
				method : "POST",
				data : {subject : 1,subjectname:subjectname},
				success : function(data){
					$("#displaymsg").html(data);
					$("#subjectname").val("");
				}

				})
				$.ajax({
					url : "subjectbackenddisplay.php",
				method : "POST",
				data : {subject : 1,subjectname:subjectname},
				success : function(data){
					$("#tbodydisplay").html(data);
					$("#subjectname").val("");
				}
				})

			}
		})

	})