<?php
$nm="";
$sn="";
$gn="";
$ct="";
$con=mysql_connect("localhost","root","");
mysql_select_db("student",$con);
if(isset($_REQUEST['sm'])){
	$sel="select * from details where grnum=".$_REQUEST['search'];
	$rs=mysql_query($sel);
	if(mysql_num_rows($rs)>0)
	{
	while($row=mysql_fetch_array($rs)){
			$nm=$row['name'];
			$sn=$row['surname'];
			$gn=$row['gender'];
			$ct=$row['city'];
				
	}
	}
	else
	{
		echo "Not found";
	}
}
?>
<html>
	<head>
		<title>Search
		</title>
	</head>
	<body>
		<form method="post">
		Search (GR num) <input type="text" name="search">
			<br>
			<input type="submit" name="sm" value="Search Query">
			<br>
			<br>
		</form>
		<table cellpadding="40px">
			<tr >
				<th > <?php echo $_REQUEST['search'];?> </th>
				<th> <?php echo $nm;?> </th>
				<th> <?php echo $sn;?></th>
				<th> <?php echo $gn;?> </th>
				<th> <?php echo $ct;?></th>
			</tr>
			</table>
	</body>
</html>