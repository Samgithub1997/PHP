<?php
if(isset($_REQUEST['submit'])){
setcookie("user",$_REQUEST['txt1'],time()+20);
setcookie("pass",$_REQUEST['txt2'],time()+20);
	if(($_COOKIE['user'])!=($_COOKIE['pass'])){
		echo "invalid user ";
	}
	else
	{
		header("location:welome.php");
	}	
}

?>
<html>
	<head>
		</head>
	<body>
		<form>
			USERNAME  : <input type="text" name="txt1">
			<br>
			PASSWORD  : <input type="password" name="txt2">
			<br>
			<input type="submit" name="submit" value="Submit Query">
			</form>
		</body>
	</html>