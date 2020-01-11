<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "eportal";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			}
?>
<html>
<head>
	<title>Welcome User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
</head>
<body background="../images/main.jpg">
<br><br>

<br><br>
<center><h1 style="color: Black"><strong>Available Courses</strong></h1></center>
<br>
<div class="container">
<table class="table table-striped table-dark" border="3">
 <thead>
    <tr scope="row">
      <th scope="col">Course Name</th>
      <th scope="col">Course Comments</th>
      <th scope="col">Open Course</th>
    </tr>
	</thead>
  <tbody>    
      <td scope="row">
      <?php	  
	  			$sql = "SELECT * FROM courses";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM))
			{
    	       echo "<tr> <td>".$row[1]."</td>";
      		   echo "<td>".$row[3]."</td>";
      		   echo '<td><a href="viewcourse.php?id='.$row[0].'" class="btn btn-success">Click Here</a> </td> </tr>';
    		}
		?>
    
  </tbody>
</table>
</div><br><center>
<strong><a href="Login.html" style="color: Black">Logout</a></strong></center>
</body>
</html>
