<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("student",$con) or die (mysql_error());
if(isset($_REQUEST['did'])){
				$del="delete from details where grnum='".$_REQUEST['did']."'";
				mysql_query($del);
}
?>
<html>
	<head>
		<title>
			detailss..
			</title>
	</head>
	<body>
		<table cellpadding="40px">
			<tr>
				<th> GR NUM </th>
				<th> NAME </th>
				<th> SURNAME </th>
				<th> GENDER </th>
				<th> CITY </th>
			</tr>
			<?php
				$sel="select *from details";
				$rs=mysql_query($sel);
				while($row=mysql_fetch_array($rs)){
			?>
			<tr>
				<th> <?php echo $row['grnum']; ?> </th>
				<th> <?php echo $row['name']; ?></th>
				<th> <?php echo $row['surname']; ?> </th>
				<th> <?php echo $row['gender']; ?> </th>
				<th> <?php echo $row['city']; ?></th>
				<th> <a href="add.php?uid=<?php echo $row['grnum']; ?>"> UPDATE  |</a></th>	
				<th> <a href="?did=<?php echo $row['grnum']; ?>"> DELETE</a></th>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>