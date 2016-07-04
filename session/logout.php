<?php
session_start();
if($_SESSION['user']!="")
{
	
echo "YOU HAVE LOGGED OUT..." ;
echo"<br> CLICK HERE TO LOGIN ";
	session_destroy();
}
else
{
header("location:action.php");
}
?>
<html>
	<head>
		<body>
			<a href="action.php"> LOGIN </a>
			</body>
		</head>
	</html>