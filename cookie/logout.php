<?php
if($_COOKIE['user']!=""){
echo "You Have Logged Out";
setcookie("user","",time()-1);
setcookie("pass","",time()-1);
}
else
{
header("location:action.php")
}
?>
<html>
	<head>
		LOGGED OUT
		</head>
	<body>
	<br><br><br>
	Click Here To 	<a href="action.php"> Login  </a>
		</body>
	</html>