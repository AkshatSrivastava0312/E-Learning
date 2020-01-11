<?php 
if(isset($_POST['unlock'])){
header('location: secques.php');	
}
           if(isset($_POST['Change'])){
			
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "eportal";
            $email=$_POST['email'];
              // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
             }
			$mail=$_POST['email'];
			$ans=$_POST['ans'];
			$newpass=$_POST['np'];
			$SELECT = "SELECT * From `peoples` Where `email` = '$email' ";
			$stmt = $conn->query($SELECT);
			if ($stmt->num_rows > 0) {
	        while($stmt = $result->fetch_assoc()){
				$check=$stmt['securityanswer'];
			}
			if($check=$ans){
            $UPDATE = "UPDATE peoples SET password='$newpass' WHERE email = '$mail'";
			if ($conn->query($UPDATE)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
            }}
			$conn->close();
		   }
			?>
			