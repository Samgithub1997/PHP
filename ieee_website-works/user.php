<?php
$nm="";
$sn="";
$unm="";
$ct="";
$pa="";
$ma="";
$pas="";
$var="";
	session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("users",$con);
	$sel="select * from user where id='".$_SESSION['id']."'";
	$rs=mysql_query($sel);
	if(mysql_num_rows($rs)>0){
		while($row=mysql_fetch_array($rs)){
			$num=$row['id'];
			$nm=$row['name'];
			$sn=$row['surname'];
			$ma=$row['email'];
			$unm=$row['username'];
			$pa=$row['password'];
			$ct=$row['city'];
		
	}
}
if(isset($_REQUEST['ssubmit']))
{
	$upd="update user set name='".$_REQUEST['txtnam']."', surname='".$_REQUEST['txtsurn']."',email='".$_REQUEST['txtma']."',username='".$_REQUEST['txtusaa']."',password='".$_REQUEST['txttop']."',city='".$_REQUEST['city']."' where id= '".$num."'";
	mysql_query($upd);
	header("location:welcomeuser.php");
}
?>
<html>
	<head>
		<title>
			<?php echo $_SESSION['user'];?>
		</title>
	</head>
	<body background="plain.jpg">
		<form name="o">
		<table  cellpadding="10px">
			<tr> <th> Registration Num : </th> <th> <?php echo $num; ?></th>
			</tr>
			<tr> <th> Name : </th> <th> <input type="text" name="txtnam"  value="<?php echo $nm; ?>"></th>
			</tr>
			<tr> <th> Surname : </th> <th> <input type="text" name="txtsurn" value="<?php echo $sn; ?>"></th>
			</tr>
			<tr> <th> email : </th> <th> <input type="text" name="txtma" value="<?php echo $ma; ?>"></th>
			</tr>
			<tr> <th> UserName : </th> <th> <input type="text" name="txtusaa" value="<?php echo $unm; ?>"></th>
			</tr>
			<tr> <th> Password : </th> <th> <input type="password" name="txttop" value="<?php echo $pa; ?>"></th>
			</tr>
			<tr> <th> city : </th> <th> <input type="text" name="city" value="<?php echo $ct; ?>"></th>
			</tr>
		</table>
			<center>  <input type="submit" name="ssubmit"  value="Submit changes"></center>
			</form>
		
	</body>
</html>