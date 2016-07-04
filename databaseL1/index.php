<html>
<head>
	<title>My web page</title>
</head>

<body>

<?php

$con=mysql_connect ("localhost","root","");
mysql_select_db("student",$con);

if(isset($_REQUEST['Submit']))
{
$ins="insert into personal values('".$_REQUEST['grnum']."','".$_REQUEST['name']."','".$_REQUEST['address']."','".$_REQUEST['class']."','".$_REQUEST['phnum']."')";
mysql_query($ins);
}
?>

<center>
<h1> Form </h1>

<form method="post">
	<table>
		<tr>
			<td>GRnum:</td>
			<td><input type="text" name="grnum"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>A Class</td>
			<td><input type="text" name="class"></td>
		</tr>
		<tr>
			<td>Ph Num</td>
			<td><input type="text" name="phnum"></td>
		</tr>
		<tr>
			<td><input type="Submit" name="Submit" value="Submit"></td>
			<td><input type="button" name="reset" value="Reset"></td>
			<td><input type="button" name="cancel" value="Cancel"></td>
		</tr>
</table>

</form>
</center>
</body>

</html>