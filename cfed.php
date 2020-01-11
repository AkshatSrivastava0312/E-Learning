<?php
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="eportal";
	try{
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
       $result=mysqli_query($conn,"SELECT * FROM feedback")
	 or die("Failed to query database".mysql_error());
	 $i = 0;
while ($i < mysqli_fetch_field($result)) {
    echo "Information for column $i:<br />\n";
    $meta = mysqli_fetch_field($result, $i);
    if (!$meta) {
        echo "No information available<br />\n";
    }
    echo "<pre>

name:         $meta->name
email:     $meta->email
query:     $meta->query
</pre>";
    $i++;
	}}
mysql_free_result($result);
	}
	catch(Exception $e){
		echo "Error";
	}
?>