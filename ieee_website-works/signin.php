<html>
	<head>
		<script src="jquery.min.js"></script>
		<script>
		</script>
		<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
		<?php
			session_start();
			$con=mysql_connect("localhost","root","");
			mysql_select_db("users",$con) or die (mysql_error());
			if(isset($_REQUEST['sm']))
			{
				$ins="insert into user values(null,'".$_REQUEST['txt1']."','".$_REQUEST['txt2']."','".$_REQUEST['email']."','".$_REQUEST['user']."','".$_REQUEST['pass']."','".$_REQUEST['pass1']."','".$_REQUEST['city']."')";
				mysql_query($ins);
				header("location:main.php");
			}
		?>
		<style>
			.marh;
			{
						margin-top: 187px;
					}
			.marb{
				margin-left:350px;
				margin-right:390px;
			}
			.bor
			{
			border-radius:4px;
			height:35px;
			width:194px;
			border-color:rgb(47,47,30);
			border-width:1;
			display:inline-block;
			}
		</style>
	<title>
	SIGN IN 
	</title>
	</head>
	<body style="background-color:#cce6ff">
		
			<div class="container-fluid">
				<div class="panel panel-info marh marb">
					<div class="panel-heading">
						<h2><center>SIGN IN</center></h2>
					</div>	
					<div class="panel-body">
						<form id="frm" method="post">
							<label>NAME </label> &nbsp <input type="text" id="txt1" class="form-group bor" name="txt1" required> &nbsp &nbsp 
							<label>LAST NAME</label>&nbsp <input type="text" id="txt2" class="form-group bor" name="txt2" required><br><br>
							<label>EMAIL  </label> <input type="email" id="email" class="form-control" name="email" required><br>
							<label>USERNAME </label> <input type="text" id="user" class="form-control" name="user" required><br>
							<label>PASSWORD</label> <input type="password" id="pass" class="form-control" name="pass" required><br>
							<label>CONFIRM PASSWORD</label> <input type="password" id="pass1" class="form-control" name="pass1" required><br>
							<label>CITY</label> <input type="text" class="form-control" name="city" ><br>
							<br>
							<input type="submit" name="sm" value="SUMBIT QUERY" class="btn btn-info">
						</form>
						
					</div>
				</div>
				
			</div>
	</body>
</html>