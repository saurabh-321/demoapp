<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
	include "dbcon.php";
	if(isset($_POST['submit']))
		{		
			     $name = $_POST['student_name'];
			     $class = $_POST['student_class'];
			     $school = $_POST['student_school_name'];
			     $address = $_POST['student_address'];
			     $email_id = $_POST['student_email_id'];
			     $gender = $_POST['student_gender'];
			     $AY = $_POST['AY'];

			    echo $insert = mysqli_query($db,"INSERT INTO `registration`(`student_name`, `student_class`,`student_school_name`,`student_address`,`student_email_id`,`student_gender`,`academic_year`) VALUES ('$name','$class','$school','$address','$email_id','$gender','$AY')");

			    if(!$insert)
			    {
			        echo mysqli_error();
			      
			    }
			    else
			    {
			        echo "Records added successfully.";
			        header('Location:login.php');
			    }

			    
		}
				mysqli_close($db); // connection close
?>
	
<html>
<head>
	<title>New Registration for 2021-22</title>
</head>

<body>
	<form  method="post" style="background-color: blue">
<table align="center">
	<tr>
	<h1>
	<p align="center" style="background-color: white"> Kindly regisater here to get User ID and PWD for further login... </p> <br>
	</h1>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" id="student_name" name="student_name" class="form-control"><br></td>
	</tr>
	<tr>
		<td>Class</td>
		<td><input type="text" id="student_class" name="student_class" class="form-control"><br></td>
	</tr>
	<tr>
		<td>School Name</td>
		<td><input type="text" id="student_school_name" name="student_school_name" class="form-control"><br></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" id="student_address" name="student_address" class="form-control"><br></td>
	</tr>
	<tr>
		<td>Email Id</td>
		<td><input type="text" id="student_email_id" name="student_email_id" class="form-control"><br></td>
	</tr>
	<tr>
		<td>Gender:</td>
	  <td><input type="radio" name="student_gender" value="male" class="form-control">Male</td>
	  <td><input type="radio" name="student_gender" value="female" class="form-control">Female</td>
	  
	  </tr>
	  <tr>

	  	<td>
	  		<label for="session">Select Academic Year</label>
	  		<select name="AY" id="academic_year" class="form-control">
		  		<option value="2019-20" >2019-20</option>
		  		<option value="2020-21">2020-21</option>
		  		<option value="2021-22">2021-22</option>
	  		</select>
	  		</td>
	  </tr>
	<table border="1" align="center">
		<tr>
			<td>
				<input type="Submit" name="submit" value="submit" class="btn btn-success">
			</td>
			<td>
				<input type="reset" name="reset" value="reset" class="btn btn-danger">
			</td>
		</tr>
	</table>
	
			
		
</table>
</body>
</html>
<script type="text/javascript">
	
</script>