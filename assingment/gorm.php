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
		<li><a href="login.php">Logout</a></li>
		
		
	</ul><br>
	<form method="post" action="" style="margin-top: 140px;margin-left: 570px;  position: absolute;">
		Name<br><input type="text"  name="name" required><br>
		Email<br><input type="Email" name="email" required><br>
		Adress<br><input type="text" name="adress" required><br>
		Father name<br><input type="text" name="father" required><br><br>
		<p style="color: black;background-color: white;position: absolute;margin-top: -7px;"><b>Upload profile photo</b></p><br>
		<input type="file" name="file" type="image/*" ><br><br>
		<input type="submit" name="submit">
		<input type="reset" name="reset">
		
	</form><br>
	<p style="margin-top: -90px; margin-right: 20px;"><li id="pq"><a style=  "margin-left: 20px;position: absolute;" class="btn btn-primary" href="dashboard.php" role="button">Click here to acess rgistered students</a></li></p><br>


	<p style="margin-top: -60px; margin-right: 5px;"><li id="pq"><a style=  "margin-left: 300px;position: absolute;" class="btn btn-primary" href="attendanceform.php" role="button">Click here to take attendance</a></li></p>


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</body>
</html>
<?php  
include  'as.php';
if(isset($_post['submit'])){

  $name= $_post['name'];
    $email= $_post['email'];
      $adress= $_post['adress'];
        $father= $_post['father'];

        $insertquery = "INSERT INTO `registration`( `name`, `email`, `adress`, `father`) VALUES ([' $name'],['$email'],['$adress'],['$father'])";


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
