<?php

$num;
function factorial($num){
	$ans=1;
do{
	$ans=$num*$ans;
	$num=$num-1;
}while($num>=1);
print $ans;
}
?>

<html>
<head><title>factorial</title></head>
<body><h1> factorial</h1>

<br>

The factorial of 9 is : <?php echo factorial(9); ?>
<br>
<a href="resume.php">RESUME </a>
<br>
<a href="largest_of_three.php">LARGEST </a>

</body>
</html>