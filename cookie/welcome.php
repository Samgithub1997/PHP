<?php

if(empty($_COOKIE['user'])){
	header("location:action.php");
}
else{
	echo "<h2> Welcome To This Page ".$_COOKIE['user']."</h2>";
}

?>
<html>
	<head>
 ACCESSING 
	</head>
	<body>
		Click Here To <a href="logout.php">LOGOUT </a>
		</body>
	</html>