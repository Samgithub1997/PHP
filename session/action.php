<?php
if(isset($_REQUEST['submit'])){
session_start();
	$_SESSION['user']=$_REQUEST['txt1'];
	$_SESSION['pass']=$_REQUEST['txt2'];
	if(($_SESSION['user']!="")&&($_SESSION['pass'])!=""){
	if($_SESSION['user']!=$_SESSION['pass']){
		echo "invalid user";}
	else {
		header ("location:welcome.php");
	}
}
		else{
			echo "fill the form completely ! ";
		}
	
}
?>
<html>
	<head>
		<title>
			Login Page
			</title>
	</head>
	
	<body>
	<form name-"form" enctype="multipart/form-data">
		USERNAME : <input type="text" name="txt1" />
		<br />
		PASSWORD : <input type="password" name="txt2" />
		<br />
		<input type="submit" name="submit" value="Submit Query">
		</form>
		
	</body>
</html>