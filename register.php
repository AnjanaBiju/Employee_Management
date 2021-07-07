<HTML>

<head>
	<title>employee</title>
	<link rel="stylesheet" href="style.css">
	</head>
<BODY><img src="logo01.jpg">
<div class="navbar" >
  		<a href="home.php">Home</a>
  		<a href ="addemp.html">Add</a>
	</div>

<?php
$con=new mysqli("localhost","root","","employee_management");
if($con->connect_error)
die("connection failed");

$op=$_POST['hid'];
$NAME=$_POST['text1'];
$ROLE=$_POST['text2'];
$MOBILE=$_POST['text3'];
$MANAGER=$_POST['text4'];
$OFFICE=$_POST['text5'];
$DATE=$_POST['text6'];

if(strcmp($op,'submit')==0)
{

$rs=$con->query("INSERT INTO employee(NAME,ROLE,MOBILE,MANAGER,OFFICE,DATE) 
VALUES('$NAME','$ROLE',$MOBILE,'$MANAGER','$OFFICE','$DATE')");

if ($con->affected_rows>0) {
  echo "New record created successfully";
}

else 
{
echo "try again";
}
}


?>

</body>
</htm