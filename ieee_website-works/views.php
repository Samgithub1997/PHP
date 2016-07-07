<?php
	$handle=fopen("view.txt","r");
if(!$handle){
	echo "cannot open the damn file man";
}
else{
	$counter=(int) fread($handle,20);
	fclose($handle);
	$counter++;
	echo "<h3>VIEWS   : ".$counter."</h3>";
	
	$handle=fopen("view.txt","w");
	fwrite($handle,$counter);
	fclose($handle);
}
?>