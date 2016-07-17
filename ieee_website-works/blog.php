<?php
error_reporting(0);

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("users",$con);
$txtblog=$_REQUEST['txtblog'];
if(isset($_REQUEST['blog'])){
$ins="insert into tbl_blog values(null,'".$_REQUEST['txtblog']."','".$_SESSION['id']."','".$_SESSION['user']."',now())";
mysql_query($ins);
}
?>
<html>
	<head>
		<title>
			blog
		</title>
		<link href="bootstrap.css" type="text/css" rel="stylesheet">
		<style>
		.o {
  background: #ffffff;
  background-image: url(http://i1273.photobucket.com/albums/y417/trynitezoo/winterpaper_zps5a2f39a3.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  width: 100%;  
}
			.matter{
				margin-left:100px;
				margin-top: 11px;
			}
			.header{
				font-size:35px;
				align-content:center;
				align-items:center;
			}
			#txtblog{
				margin-top: 15px;
			}
		
		</style>
	</head>
	<body class="o">
		<form name="a" method="post">
		<div class="jumbotron">
	<a href="welcomeuser.php" style="border-radius: 9px;margin-left: 50px;padding-bottom: 10px;padding-left:10px;padding-right: 10px;padding-top: 10px ;background-color:#99bbff;text-decoration-color:#001a33;">Home </a>	<a href="logout.php" style="float: right;padding-bottom: 10px;padding-left:10px;padding-right: 10px;padding-top: 10px;margin-right: 50px ;background-color:#99bbff;text-decoration-color:#001a33;border-radius:9px;">LogOut</a><br>
	<center><h2><b>	<u> IEEE SBM BLOGSPOT  </u></b></h2> </center>
		</div>
		<div class="row" style="margin-left:20px; margin-right:20px;">
			<div class="col-sm-10">
			<input type="text" name="txtblog" id="txtblog" class="form-control" placeholder="Blog Here <?php echo $_SESSION['user']?>">
			</div>
			<div class="col-sm-2" >
			<input type="submit" style="margin-top:15px" class="form-control" name="blog" value="BLOG IT">
			</div>
		</div>
		<div class="roww">
			<div class="matter">
				<?php 
				
					$sel="select * from tbl_blog order by time_stamp DESC ";
					$rs=mysql_query($sel);
					while($row=mysql_fetch_array($rs)){
						echo  $row['user']." : ".$row['blog']."<br>";
						}
			
				?>
			</div>
		</div>	
			</form>
	</body>
</html>