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
            $cid=$_SESSION["id"]=$_GET['id']; 
            $sql = "SELECT * FROM courses where cid=$cid";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM))
			{
				$_SESSION["name"]=$row['1'];
				$_SESSION["desc"]=$row['2'];
			}
?>
<!DOCTYPE html>
<html>
<head>
	<title>About
		<?php	echo $_SESSION["name"];?>
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
	#rcorners2 {
  		border-radius: 25px;
  		border: 2px solid #73AD21;
  		}</style>
</head>
<body background="../images/admin.jpg">
<br><br><br>
	<div class="container" id ="rcorners2">
		<h1  style="text-align: center;">About
		<?php	echo $_SESSION["name"];?>
		</h1>
		<br />
		<div class="panel" style="text-align: justify-all;font-family: sans-serif; font-size: 25px;">
			<?php	echo $_SESSION["desc"];?>
		</div>
	</div>
</body>
</html>