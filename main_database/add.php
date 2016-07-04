<?php
$nm="";
$ct="";
$sn="";
$gn="";
$con=mysql_connect("localhost","root","");
mysql_select_db("student",$con) or die(mysql_error());
if(isset($_REQUEST['submit'])){
	$ins="insert into details values ('".$_REQUEST['grnum']."','".$_REQUEST['name']."','".$_REQUEST['surname']."','".$_REQUEST['gender']."','".$_REQUEST['city']."') ";

	mysql_query($ins);
}
if(isset($_REQUEST['uid']))
{
	 $sel="select * from details where grnum=".$_REQUEST['uid'];
  $rs=mysql_query($sel);
  while($row=mysql_fetch_array($rs))
  {
	  $nm=$row['name'];
	  $sn=$row['surname'];
	  $gn=$row['gender'];
	  $ct=$row['city'];
	  
  }
	}
if(isset($_REQUEST['updbtn']))
{
	$upd="update details set name='".$_REQUEST['name']."', surname='".$_REQUEST['surname']."',gender='".$_REQUEST['gender']."', city='".$_REQUEST['city']."' where grnum= '".$_REQUEST['uid']."'";
	mysql_query($upd);
	header("location:view.php");
	
}
?>
<html>
	<head>
		<title>
		ADD RECORDS
		</title>
	</head>
	<body>
		<form name="form" method="post" enctype="multipart/form-data">
		<table >
			<tr>
				<th>STUDENT'S GR.NUM.</th>
				<th><?php
			if(isset($_REQUEST['uid']))
			{
				echo $_REQUEST['uid'];
			}
			else
			{ ?>
			<input type="text" name="grnum">	
			<?php } ?></th>
			</tr>
			
			<tr>
				<th>STUDENT'S NAME</th>
				<th><input type="text" name="name" value="<?php echo $nm;?>"></th>
			</tr>
			
			<tr>
				<th>STUDENT'S SURNAME</th><?php echo $sn?>
				<th><input type="text" name="surname" value="<?php echo $sn; ?>"></th>
			</tr>
			
			<tr>
				<th><input type="radio" name="gender" value="Male"> MALE</th>
				<th><input type="radio" name="gender" value="female"> FEMALE</th>
			</tr>
			
			<tr>
				<th>STUDENT'S CITY</th>
				<th><input type="text" name="city" value="<?php echo $ct?>"></th>
			</tr>
			<tr>
				<th>STUDENT'S PHOTO</th>
				<th><input type="file" name="photo"></th>
			</tr>
		</table>
			<center><?php
			if(isset($_REQUEST['uid']))
			{ ?>
		<input type="Submit" name="updbtn" value="Update">
			<?php } else { ?>
				<input type="Submit" name="submit" value="Submit">
			<?php } ?></center><br>
			<input type="button" name="reset" value="Reset">			
		</form>
	</body>
</html>