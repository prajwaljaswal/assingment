<?php  
$username = "root";
$password = "";
$server = 'localhost';
$db = "qwerty";
$conn = mysqli_connect("$server","$username","$password","$db");
 
$query = "select*from registration";
$result = mysqli_query($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ftech data from database</title>
	<style>
		body
		{
			background-image: url('p1.jpg');
			background-size: 100%;
           background-repeat: no-repeat;
		}

		ul
	{

		margin-left:1100px;
		margin-top: 25px;
	   	font-size: 15px;
	   	position: absolute;
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

	body
	{
           background-image: url(p1.jpg);
           background-size: 100%;
           background-repeat: no-repeat;

          
	}
	a:hover
	{
		color: black;
	}

	</style>
</head>
<body>
	
<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="about.php">About</a></li>
	</ul>
	<table align="center" border="1px" style="width:600px; line-height:40px; background-color: white;">
		<tr>
			<th  colspan="7"><h2>Student record</h2></th></tr>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Adress</th>
				<th>Father</th>
			</tr>
	
<?php  
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr>
	<td><?php echo $rows['id']; ?></td>
	<td><?php echo $rows['Name']; ?></td>
	<td><?php echo $rows['Email']; ?></td>
	<td><?php echo $rows['Adress']; ?></td>
	<td><?php echo $rows['Father']; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>



