<?php
session_start();
if(empty($_SESSION['user'])){
	header("location:index.php");
}
else{
if(isset($_REQUEST['logout'])){
	session_destroy();
	header("location:index.php");
	echo "Session destroyed yaar";
}
}
?>
<html>
	<head>
		<title>
			WELCOME <?php echo $_SESSION['user']; ?>!
		</title>
	</head>
	<body>
		<align="left"> <?php echo date ('d/m/Y')?> <br><?php echo date ('h:i:s  a')?></align>
		<center>
		<Ol>
			<li><a href="add.php">Add Students</a><br></li>
			<li><a href="view.php">View Students</a><br></li>
			<li><a href="search.php">Search Student</a><br></li>
			<li><a href="blog.php"> BLOG </a> </li><br>
				</Ol>
			<br>
			<br>
			<br>
			<br>
		</center>
		<form>
			<input type="submit" name="logout" value="LOGOUT">
		</form>
	</body>
</html>