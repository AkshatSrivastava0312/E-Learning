<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "eportal";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			}
			session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Courses</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
	#rcorners2 {
  		border-radius: 25px;
  		border: 2px solid #73AD21;
  		}
  		#h
  		{
  			height: 70px;
  			width:160px;
  		}
  	#rcorners3 {
  		border-radius: 25px;
  		border: 2px solid #73AD21;
  		width:200px;
   		}
  	</style>
</head>
<body background="../images/admin.jpg">
<br><br><br><br>
<div class="container" style="text-align:center;" id="rcorners2">
	<h1>Delete Course</h1>
	<form action="" method="POST">
		<!--<input type="text" id="rcorners3" name="a1">
		-->
		<select id="rcorners3" name="a1">
			<option>--Select Courses--</option>
			
			<?php
			$sql = "SELECT * FROM courses";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM))
			{
    	       echo "<option>".$row[1]."</option>";
    	    }
    	    ?>
			
		</select>
		<input type="submit" class="btn btn-success" id="rcorners2" name="submit">
		<br />
		<table align="center" style="text-align: center; font-size:20px;">
			
		<?php
		if(isset($_POST['submit']))
		{ echo "<h3>CURRENT COURSE DETAILS</h3>";
			$_SESSION["name"]=$cname=$_POST['a1'];
			$sql = "SELECT * FROM courses where ctitle='$cname'";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM))
			{
    	       echo "<tr><td>Course ID.           </td><td>     ".$row[0]."</td></tr>";
     	       echo "<tr><td>Course Title.        </td><td>     ".$row[1]."</td></tr>";
    	       echo "<tr><td>Course Descrpition.  </td><td>     ".$row[2]."</td></tr>";
    	       echo "<tr><td>Course Comment.  </td><td>     ".$row[3]."</td></tr>";
    		}
		}
		?>
		<tr>
			<td colspan="2">
			<input type="submit" class="btn btn-success" id="rcorners2" name="submit1" value="Delete this Course">
			<input type="submit" class="btn btn-danger" id="rcorners2" name="submit4" value="Cancel" ><a href="admin.php"></a>
			</input>
			</td>
		</tr>
		<?php
		if(isset($_POST['submit1']))
		{
			$cname= $_SESSION["name"];
			$sql = "DELETE from courses WHERE ctitle='$cname'";
			if ($conn->query($sql) === TRUE) {
			echo "<script>alert('Record Deleted Successfully');</script>";
			$referer = $_SERVER['HTTP_REFERER'];
			header("Location: $referer");
			} 
			else {
    		echo "Error in deleteing the record: " . $conn->error;
			}

		}	
		if (isset($_POST['submit4']))
		{
			$referer = 'admin.php';
			header("Location: $referer");	
		}
		?>
		</table>
	</form>
</div>
</body>
</html>