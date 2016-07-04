<?php
session_start();
header("Content-type:application/json");
$con=mysql_connect("localhost","root","");
mysql_select_db("users",$con);
$sel="select * from user where username='".$_REQUEST['user']."' and password='".$_REQUEST['pass']."'";
$rs=mysql_query($sel);
if(mysql_num_rows($rs)>0){
	$_SESSION['user']=$_REQUEST['user'];
	$_SESSION['pass']=$_REQUEST['pass'];
	echo '{"name":"done"}';
}
else
{
	echo '{"name":"error"}';
}
?>
