<?php
$nm="";
$cl="";
$a="";
$con=mysql_connect("localhost","root","");
mysql_select_db("student",$con) or die(mysql_error());
if(isset($_REQUEST['Submit']))
{
	$ins="insert into personal values('".$_REQUEST['fname']."','".$_REQUEST['rollno']."','".$_REQUEST['City']."')";
	mysql_query($ins);
	
}
if(isset($_REQUEST['uid']))
{
	 $sel="select * from personal where rollno=".$_REQUEST['uid'];
  $rs=mysql_query($sel);
  while($row=mysql_fetch_array($rs))
  {
	  $nm=$row['name'];
	   $a=$row['address'];
  }
	
}
if(isset($_REQUEST['btnupdate']))
{
	$upd="update personal set name='".$_REQUEST['NAME']."', address='".$_REQUEST['ADDRESS']."' where GRnum= '".$_REQUEST['uid']."'";
	mysql_query($upd);
	header("location:table.php");
	
}
?>
<html>
<head>
	<title>My web page</title>
</head>

<body>



<center>
<h1> Form </h1>

<form method="post">
	<table>
		<tr>
			<td>First name:</td>
			<td><input type="text" name="fname" value="<?php echo $nm; ?>"></td>
		</tr>
		<tr>
			<td>Roll no.</td>
			
			<td>
			<?php
			if(isset($_REQUEST['uid']))
			{
				echo $_REQUEST['uid'];
			}
			else
			{ ?>
			<input type="text" name="grnum">	
			<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" value="<?php echo $a; ?>"></td>
		</tr>
		<tr>
			<td>class</td>
			<td><input type="text" name="class" value="<?php echo $cl; ?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" value="<?php echo $a; ?>"></td>
		</tr>
		<tr>
			<td>
			<?php
			if(isset($_REQUEST['uid']))
			{ ?>
		<input type="Submit" name="btnupdate" value="Update">
			<?php } else { ?>
				<input type="Submit" name="Submit" value="Submit">
			<?php } ?>
			</td>
			<td><input type="button" name="reset" value="Reset"></td>
			<td><input type="button" name="cancel" value="Cancel"></td>
		</tr>
</table>

</form>
</center>
</body>

</html>