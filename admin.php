<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eportal";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
$sysdate=$date->format('d/m/y');
$systime=$date->format('H:i a');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>
	<style type="text/css">
		#rcorners2 {
  		border-radius: 25px;
  		border: 2px solid #73AD21;
  		}
  		#rcorners1 {
  		text-align:center;
  		color:white;
  		text-decoration: none;
  		font-family: sans-serif;
  		font-size:30px;
  		border-radius: 25px;
  		background: #800080;
  		padding: 20px;
  		width: 200px;
  		height: 150px;
	}
	a{
		text-decoration: none;
		color:white;
	}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body  background="../images/admin.jpg">
	<br><br><br><br>
	<b><center><a href="login.html" style="color: black">Log out</a></center></b>
	<br>
	<br>
	<div class="container">
	<div class="container" style="background: aqua; text-align:center;" id="rcorners2"> 
      <h1>Welcome Admin</h1> 
      <p>You have been given adminstrative privilege<br />
      	<?php 
      	echo "Today is: ".$date->format('d/m/y')."<br />"; 
      	echo "Current time is: ".$date->format('H:i a')."<br />";
      	?>
      </p> 
      </div> 
     <br />
    <br /><br />
     <div class="row">
     	<div style="margin-left: 100px">
        </div>
    <div class="col-sm-2" id="rcorners1">
    <a href="addcourses.php" style="color: Black">Add a New Course</a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2" id="rcorners1">
      <a href="update.php" style="color: Black">Update Courses</a>
    </div>
    <div class="col-sm-2"> 
    </div>
    <div class="col-sm-2" id="rcorners1">
      <a href="delete.php" style="color: Black">Delete Courses</a>
    </div>
	
    <div class="col-sm-2">
	    </div>
  </div>
    </div>
    <br /><br />

    <div class="container" style="background: aqua;  text-align:center;" id="rcorners2"> 
      <h1>&copy;<?php echo date("Y")."<br />";?>A Dr. Shakuntala Mishra National Rehabilitation University Project</h1>  
      </div> 
</body>
</html>