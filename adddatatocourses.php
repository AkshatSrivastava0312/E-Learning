<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eportal";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["submit"]))
{	
	if (isset($_FILES["inter"]['name']))
	{
		$target_path = "pdf/";  
		$target_path = $target_path.basename( $_FILES['inter']['name']);   
  		$a1=$target_path;
		if(move_uploaded_file($_FILES['inter']['tmp_name'], $target_path)) {  
    	echo "File uploaded successfully!";  
		}  
	}
	if (isset($_FILES["ccon"]['name']))
	{
		$target_path = "pdf/";  
		$target_path = $target_path.basename( $_FILES['ccon']['name']);   
		$a2=$target_path;
  		//$address=$target_path;
		if(move_uploaded_file($_FILES['ccon']['tmp_name'], $target_path)) {  
    	echo "File uploaded successfully!";  
    	//echo '<a href="' . $address . '">Link text</a>';
		} 
	}
	$query = "SELECT *FROM courses";  
    $result = mysqli_query($conn, $query); 
    $row = mysqli_num_rows($result); 
    if($row==0)
	$sql = "INSERT INTO courses (cid, ctitle, codesc, cocomm, interview, content) VALUES (1, '".$_POST["ctitle"]."','".$_POST["cdesc"]."','".$_POST["ccom"]."','".$a1."','".$a2."')";
	else
	{
		$row=$row+1;
	$sql = "INSERT INTO courses (cid, ctitle, codesc, cocomm, interview, content) VALUES ('".$row."', '".$_POST["ctitle"]."','".$_POST["cdesc"]."','".$_POST["ccom"]."','".$a1."','".$a2."')";
	}	

	if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New Course Add');</script>";
	} 
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$sql = "SELECT * FROM courses";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result, MYSQLI_NUM))
	{
    echo ($row[0]);
    echo "<br />";
    echo ($row[1]);
    echo "<br />";
    echo ($row[2]);
    echo "<br />";
    echo ($row[3]);
    echo "<br />";
    echo ($row[4]);
    echo "<br />";
    echo ($row[5]);
    echo "<br />";
	}
}
if (isset($_POST['submit4']))
		{
			$referer = 'admin.php';
			header("Location: $referer");	
		}
?>