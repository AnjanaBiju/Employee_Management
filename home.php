<html>
	<head>
	<style>
	table
	{
		border-collapse:separate;
		
	}
	td
	{
		width: 450px;
	}
	hr 
	{
		margin-left: 20;
		margin-right: 20;
		color: black;
		size: 3;
	}
	img
	{
		display: inline-block;
		margin-left:20; /* margin: 20px was off */
		float: left;
		height: 50px;
		width: 50px;
		border-radius: 50%; 
		
	}
	</style>

	<title>employee</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<img src="logo01.jpg"><br>
		<font size=5>Employee Management</font></img>
		<br><br><hr>
	<div class="navbar" >
 	<a href="home.php">Home</a>
	<a href ="addemp.html">Add</a>
	</div></hr>

	<?php echo "<hr> <br> <br>";
	$con=new mysqli("localhost","root","","employee_management");
	if($con->connect_error)
	die("connection failed");
	$rs=$con->query("select * from employee ORDER BY EMP_ID DESC");
	$cr=date(Y/m/d);
	if($rs->num_rows>0)
	{
	
	while($row=$rs->fetch_row())
	       {
	$db_date=$row[6];
		 echo   "<center><table rules=none border=1 cellspacing=30><tr><td>Name : $row[1]</td>
										<td>Manager : $row[4]</td>
									</tr>
									<tr> <td>Role  : $row[2]</td>
										<td>Office : $row[5]</td>
									</tr>
									<tr><td>Mobile : $row[3]</td>
										<td>Joining Date : $row[6]</td>
									</tr>
							</table>
				</center><br><br>"  ;
	      }
	}
	?>
	
	</body>
</html>

