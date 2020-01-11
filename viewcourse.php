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
				$_SESSION["com"]=$row['3'];
				$_SESSION["path1"]=$row['4'];
				$_SESSION["path2"]=$row['5'];
			}

?>
<!DOCTYPE html>
<html>
<head>
	<title>::Welcome to<?php echo $_SESSION["name"];?>::</title>
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
  		width: 250px;
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
<body background="../images/admin.jpg">
	<br><br><br><br>
	<div class="container">
	<div class="container" style="background: white; text-align:center;" id="rcorners2"> 
      <h1>Welcome to <?php echo $_SESSION["name"];?></h1> 
      <p>
      	<?php 
      $date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
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
    <?php $id =$_SESSION["id"];echo '<a href="about.php?id='.$id.'">';?>
    About <?php echo $_SESSION["name"];?></a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2" id="rcorners1">
      <?php $path1=$_SESSION["path1"];echo '<a href="'.$path1.'">';?>Interview Questions On <?php echo $_SESSION["name"];?></a>
    </div>
    <div class="col-sm-2"> 
    </div>
    <div class="col-sm-2" id="rcorners1">
      <?php $path2=$_SESSION["path2"];echo '<a href="'.$path2.'">';?>Content On <?php echo $_SESSION["name"];?> </a>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
    </div>
    </body>
    </html>