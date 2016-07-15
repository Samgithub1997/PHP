<?php
session_start();
header("Content-type:application/json");
$con=mysql_connect("localhost","root","");
mysql_select_db("users",$con);
$sel="select * from user where username='".$_REQUEST['user']."' and password='".$_REQUEST['pass']."'";
$rs=mysql_query($sel);
if(mysql_num_rows($rs)>0){
	while($row=mysql_fetch_array($rs))
	{
		$id=$row['id'];
		$nm=$row['name'];
	}
	$_SESSION['id']=$id;
	$_SESSION['nam']=$nm;
	$_SESSION['user']=$_REQUEST['user'];
	echo '{"name":"done"}';
}
else
{
	echo '{"name":"error"}';
}
?>
