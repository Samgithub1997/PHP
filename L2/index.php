<?php 
include("header.php") ;
$a=array("car" , "Music","aeroplanes","Helicopter");
foreach($a as $x){
	echo  $x." <br>";
}
if(isset($x))
{
echo date('d/m/Y ');
}
else
{
echo date('h:i:s / a');
}
include("footer.php");
?>