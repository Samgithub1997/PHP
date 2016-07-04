<?php
session_start();
if(empty($_SESSION['user']))
{
	header("location:action.php");
}
else {
 echo "<h1> WELCOME ".$_SESSION['user']."</h1><br>";
}
?>
<html>
	<head>
	 Access Session
		</head>
	<body> <br>
		<a href="logout.php">LOGOUT</a>
		</body>
</html>