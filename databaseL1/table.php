<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("student",$con) or die(mysql_error());
if(isset($_REQUEST['did'])){
		$del="delete from personal where grnum=".$_REQUEST['did'];
		mysql_query($del);
}
?>
<html>
	<head>
		<title>
			DATABASE IN TABULAR FORM
		</title>
		</head>
	<body>
		<table>
			<tr>
				<th> GR number </th>
				<th> Name      </th>
				<th> Address   </th>
				<th> Class     </th>
				<th> Phone Num </th>
				</tr>
		<?php
			$sel="select *from personal	";
			$rs =mysql_query($sel);
			while($row=mysql_fetch_array($rs)){
		?>
			<tr>
			<th> <?php echo $row[0] ;?></th>	
			<th> <?php echo $row[1] ;?></th>
			<th> <?php echo $row[2] ;?></th>
			<th> <?php echo $row[3] ;?></th>
			<th> <?php echo $row[4] ;?></th>
				<th> <a href="?did=<?php echo $row[0]; ?>"> DELETE        |     </a>
					<a href="index.php?uid=<?php echo $row[0]; ?>">   UPDATE </a> </th>
			</tr>
			
		<?php  }  ?>
		</table>
	</body>
</html>