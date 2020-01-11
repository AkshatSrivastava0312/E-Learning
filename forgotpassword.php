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
 /*
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="images/back.jpg" >
	<br><br><br><br><br><br>
	<div class="container">
  <h1 style="text-align: center; font-family: sans-serif;">Forgot Password</h1>
  <br />
  <form action="?" method="POST">
  <div class="row">
    <div class="col-sm-4">
      <p></p>
    </div>
    <div class="col-sm-4">
    	<table align="center" border="1" cellpadding="10" cellspaceing="10">
    		<tr>
    			<td style="font-weight: bold;">
    				Email:
    			</td>
    			<td>
    				<input type="text" name="email" placeholder="Email" style="width:240px; font-weight: bold;border-radius: 25px; text-align:center ;">
    			</td>
    		</tr>
    		<tr>
    			<td colspan="2" align ="center">
    				<input type="submit" name="sub1"  class=" btn btn-success" style="border-radius: 25px;" value="Search Email">
    				<input type="submit" name="sub5"  class=" btn btn-danger" style="border-radius: 25px;" value="Cancel">
    			</td>
    		</tr>
    		<tr>

			<?php
			if(isset($_POST['sub5']))
			{

				header('location: Login.html');


			}
			if(isset($_POST['sub1']))
			{
			$email=$_POST['email'];
			$sql = "SELECT * FROM peoples where email='$email'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result)!=0)
			{
			while($row = mysqli_fetch_array($result, MYSQLI_NUM))
			{

    	       echo '
    	       <td style="font-weight: bold;">Security Question</td>
    	       <td>
    				<input type="text" value="'.$row[4].'" style="width:240px; font-weight: bold; border-radius: 25px; text-align:center ;" readonly>
    			</td>';
    			$_SESSION['ans']=$row[5];
    			$_SESSION['name']=$row[0];
    			echo '<tr>
    	       <td style="font-weight: bold;">Security Anwser</td>
    	       <td>
    				<input type="text" placeholder="Enter Security Anwser"  name="anws" style="width:240px; font-weight: bold; border-radius: 25px; text-align:center ;">
    			</td></tr>';
    			echo '<tr>
    			<td colspan="2" align ="center">
    				<input type="submit" name="sub2"  class=" btn btn-success" style="border-radius: 25px;" value="Verify Anwser">
    			</td>
    		</tr>';

    	    }
    		}
   	    	else
 	   		{
    		echo "<script>alert('The given the email is invalid')</script>";
       		}

			}
		if(isset($_POST['sub2']))
		{
			$pans=$_POST['anws'];
			$cans=$_SESSION['ans'];
			if($cans==$pans)
			{
				echo '<tr>
    	       <td style="font-weight: bold;">Change Password</td>
    	       <td>
    				<input type="text" placeholder="Enter New Password"  name="pass" style="width:240px; font-weight: bold; border-radius: 25px; text-align:center ;">
    			</td></tr>';
    			echo '<tr>
    			<td colspan="2" align ="center">
    				<input type="submit" name="sub3"  class=" btn btn-success" style="border-radius: 25px;" value="Change Password">
    			</td>
    		</tr>';
			}
			else
			{
				echo "<script>alert('The given the response is invalid')</script>";
			}

		}
		if(isset($_POST['sub3']))
		{
			$name=$_SESSION['name'];
			$pass=$_POST['pass'];
			$sql = "UPDATE peoples SET password='$pass'  WHERE firstname='$name'";
			if ($conn->query($sql) === TRUE) {
		    echo "<script>alert('Record updated successfully');</script>";
		}
		else {
    	echo "Error updating record: " . $conn->error;
		}
		}
?>
    	</table>
    </div>
    <div class="col-sm-4">
      <p></p>
    </div>
  </div>
</div>
</form>
</body>
</html>
