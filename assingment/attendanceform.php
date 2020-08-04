<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<style>
		body
	{
           background-image: url(p1.jpg);
           background-size: 100%;
           background-repeat: no-repeat;


          
	}
	input 
	{
			
		outline: none;
		color: blue;


	}
	ul
	{

		margin-left:1100px;
		margin-top: 25px;
	   	font-size: 15px;
	}
	li
	{
        display: inline;
        margin-left: 15px;
        font-weight: lighter;

	}	
	a
	{
		color:black;
		font-weight:600
	}
	ul li a:hover
	{
		color:grey;
	}
	

	</style>
</head>
<body>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>	
		<li><a href="about.php">About</a></li>
		
	</ul><br>
   <p style=" margin-left: 440px;margin-top: -35px; font-size: 50px;position: absolute;opacity: 0.5;background-color: #e7e7e7"><b>Attendance sheet</b></p><br>
	<form style="margin-left: 540px;margin-top: 100px">
		<br><input type="text" name="id" placeholder="id" required><br>
		<br><input type="text" name="name" placeholder="name" required><br>
		<br><input type="email" name="email" placeholder="Email" required><br>
		<br><input type="date" name="date" placeholder="date" reuired>
		<br><b>Attendance status<b><br><select name="select"><option>present</option><option>Absent</option></select><br><br>
	    <input type="submit" name="submit">
	    <input type="reset" name="reset">
	</form>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>


<?php  
include  'as.php';
if(isset($_post['submit'])){

  $name= $_post['name'];
    $email= $_post['email'];
      $adress= $_post['date'];
        $select= $_post['select'];

        $insertquery = "INSERT INTO `attendanceform`( `name`, `email`, `date`, `attendance_status`) VALUES ([' $name'],['$email'],['$adress'],['$select'])";


        $run = mysqli_query($conn,$insertquery);
          if($run){
          	?>
          	<script >
          		alert("data inserted");
          	</script>
          	<?php

          }else{
          	?>
          	<script >
          		alert("data not inserted");
          	</script>
          	<?php
          }



}

?>	
