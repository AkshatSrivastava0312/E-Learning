<?php
$email=$_POST['mail'];
$password=$_POST['passw'];
try{
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"eportal");
         $result=mysqli_query($con,"SELECT * FROM peoples WHERE email ='$email' AND password='$password'")
	 or die("Failed to query database".mysql_error());
	 $row=mysqli_fetch_array($result);
	 if ($row['email']==$email && $row['password']==$password && $row['id']==1){
     session_start();
		 header('location: admin.php');
	  }else if($row['email']==$email && $row['password']==$password && $row['id']==0){
		  session_start();
		 header('location: course.php');
	  }else{
				 echo "<script>alert('Invalid username or password')</script>";
}}
catch(Exception $e)
{
	 echo "<script>alert('Error')</script>";
}
 
?>
