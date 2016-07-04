<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("a_database",$con);
if(isset($_REQUEST['submit'])){
session_start();

$_SESSION['user']=$_REQUEST['user'];
$_SESSION['pass']=$_REQUEST['pass'];
if(!empty(($_SESSION['user'])&&($_SESSION['pass']))){
	$sel="select * from users where username='".$_REQUEST['user']."' and password='".$_REQUEST['pass']."'";
	$rs=mysql_query($sel);
	if(mysql_num_rows($rs)>0){
		header("location:welome.php");
	}
	
		else{
			echo "INVALID CREDENTIALS ...TRY AGAIN....";
		}
	}	
	
}

?>
<html>
	<head>
		<title>
			LOGIN 
			PAGE
			</title>
		</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			USERNAME : <input type="text" name="user">
			<br>
			PASSWORD : <input type="password" name="pass">
			<br>
			<center> <input type="submit" name="submit" value="SUBMIT QUERY" > </center>
			</form>
		</body>
	</html>