 <?php
 
 $con=mysqli_connect("localhost", "root", "Subhamsa1@", "res"); 
 $email = $_POST['email'];
 $password = $_POST['password'];
 $sql = "update user_detail set password='$password' where email ='$email'";

 if(mysqli_query($con,$sql))
{
 echo 'Updated successfully. Login with new password';
}
else
{
 echo 'Something went wrong';
 }

 ?>