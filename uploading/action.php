<?php
if(isset($_REQUEST['submit'])){
	echo "<br> NAME OF THE FILE :".$_FILES['files']['name'];
	echo "<br>  TEMPORARY NAME :".$_FILES['files']['tmp_name'];
	echo "<br>  SIZE OF FILE/S  :".$_FILES['files']['size'];
	echo "<br> TYPE OF FILE/S".$_FILES['files']['type'];
	echo "<br> ERRORS IN FILE/S :".$_FILES['files']['error'];
	$count= date ('h i s');
	echo "<br>".$count."<br>";
	move_uploaded_file($_FILES['files']['tmp_name'],$count);
	
}
?>
<html>
<head>
	<title>  display
	</title>
	</head>
	<body>
	</body> <br> <h3>The pic you uploaded was : </h3><br> <img src= "<?php echo $count ;?>">
	</html>