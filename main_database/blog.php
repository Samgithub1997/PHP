<html>
	<head>
		<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
		<title>
			BLOG
		</title>
		<style>
			.marb{
				margin-left:120px;
				margin-right:100px;
			}
			.w{
			width:800px;
			border-color:rgb(47,47,30);
			border-width:1;
			display:inline-block;
			border-radius:4px;
			border-spacing:10px;
			height:42px;
			}
		</style>
	</head>
	<body background="dark.jpg" style="color:#d9d9d9;margin-left:50px; font-size:20;">
	<form id="frm" name="frm" method="post">
	<center>	<h1 style="display:inline-block;text-decoration:underline;text-decoration:bold;color:#d9d9d9"> BLOGSPOT </h1></center>
		<br>
		<br>
		<input type="text" placeholder="Blog It Out"  name="txt1" class="form-group w marb"> &nbsp &nbsp &nbsp
		<input type="submit" id="btn" name="btn" value="Blog Your Ideas" style="padding-left:10px;padding-right:10px;padding-bottom:8px;padding-top:2px; ">
	<br><br>
		</form>
		<?php
session_start();
$con=mysql_connect("localhost","root");
mysql_select_db("user",$con);

if (isset($_REQUEST['btn'])){
$name=$_REQUEST['txt1'];
	if(!empty($name))
	{
		
		$handle=fopen("data.txt",'a');
		fwrite($handle,$_SESSION['user']." : ".$name."\n");
	    fclose($handle);
		
	$reading= file("data.txt");
		foreach($reading as $n){
			echo $n."<br>";
		}
	}
	else {
		echo ".........";
		}
}
?>
	</body>
</html>