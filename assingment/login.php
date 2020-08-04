<?php  
$username = "root";
$password = "";
$server = 'localhost';
$db = "qwerty";
  $conn = mysqli_connect("$server","$username","$password","$db");
 
    
if(isset($_post['username'])){

 $username = $_post['username'];
  $password = $_post['password'];
  $sql = "select * from loginform where username = ' ".$username. "'and password = '".$password."' limit 1";
  $result = mysql_query($sql);
  if(mysql_num_rows($result)==1){
  	echo "logged in";
  	exit();					
  }	
     else {
     	echo "incorrect password";
     	exit();
     }
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>welcome to login page</title>
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
		margin-top:20px;
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

	</style>
</head>
<body>
	<ul style="position: absolute;">
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="about.php">About</a></li>
	</ul><br>
<form method="post" action="gorm.php" style="margin-top: 140px;margin-left: 570px; ">
username<br><input type="text" name="username" required><br>
password<br><input type="password" name="password" required><br><br>
<input type="submit" name="submit">
<input type="reset" name="reset">
</form>
</body>
</html>