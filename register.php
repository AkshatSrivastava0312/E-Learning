<?php
$firstname=$_POST['fstname'];
$lastname=$_POST['lstname'];
$phone=$_POST['phone'];
$email=$_POST['uname'];
$password=$_POST['pass'];
$ques=$_POST['ques'];
$ans=$_POST['ans'];



if(!empty($firstname)||!empty($lastnamename)||!empty($phone)||!empty($email)||!empty($password)||!empty($ques)||!empty($ans))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="eportal";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From `peoples` Where `email` = ? Limit 1";
     $INSERT = "INSERT INTO `peoples`(`firstname`, `lastname`, `phone`, `email`, `securityquestion`, `securityanswer`, `password`) VALUES (?,?,?,?,?,?,?)";

     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssissss", $firstname, $lastname, $phone, $email, $ques, $ans, $password);
      $stmt->execute();
	  $msg = "Registration sucessfull";
	  header('location: Register.html?msg='.$msg);
	 if(isset($_GET['msg'])) echo $_GET['msg']; 
     } else {
    echo "<script>alert('Someone already registerd using this email')</script>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
echo "<script>alert('All field are required')</script>";
 die();
}
?>
