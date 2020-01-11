<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	#rcorners2 {
  		border-radius: 25px;
  		border: 2px solid #73AD21;
  		}</style>
	<title>Add courses</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="../images/admin.jpg">
<br><br><br><br>
	<div class="container">
	
		<div class="col-sm-6" style="margin-left: 20%;">
		
	<div class="panel" style=" background: white; text-align:center;"> 
	
    <div class="panel-body"  id="rcorners2">
	<br>
      <h1>Add a new Course</h1> 
<form action="adddatatocourses.php" method="POST" enctype="multipart/form-data">      
      <table align="center">
	  <br>
      	<tr>
      		<td>
      			<label  style="font-size:15px;">Course Title:</label> 
      		</td>
      		<td>
      		    <input type= "text" name="ctitle" id="rcorners2">
      		</td>
      	</tr>
      	<tr>
      		<td>
      			<label  style="font-size:15px;">Course Description:</label> 
      		</td>
      		<td>    
      		    <textarea type= "textarea" rows="4" cols="25" name="cdesc" id="rcorners2"></textarea>
      		</td>
      	</tr>	
      	<tr>
      		<td>
      			<label  style="font-size:15px;">Course Comments:</label> 
      		</td>
      		<td>
      		    <textarea rows="4" cols="25" type= "textarea" name="ccom" id="rcorners2"></textarea>
      		</td>
      	</tr>
      	<tr>
      		<td>
      			<label  style="font-size:15px;">Interview Question</label> 
      		</td>
      		<td>
      		    &nbsp;&nbsp;&nbsp;&nbsp;<input type= "file" name="inter">
      		</td>
      	</tr>
      	<tr>
      		<td>
      			<label  style="font-size:15px;">Course Content</label> 
      		</td>
      		<td>
      		    &nbsp;&nbsp;&nbsp;&nbsp;<input type= "file" name="ccon">
      		</td>
      	</tr>
      	<tr align="center" >
      		<td colspan="3">
      			<input type="submit" name="submit" class="btn btn-success" value="Submit">
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="submit4" class="btn btn-danger" value="Cancel">
      		</td>
      	</tr>
		<br>
      </table>
	  <br>
  </div>
</div>
</form>
      </div> 
	</div>
</body>
</html>