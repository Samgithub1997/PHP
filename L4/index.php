<?php
if(isset($_REQUEST['btn'])){
		echo "<h3>YOU HAVE SUCCESSFULY REGISTERED THE FORM </h3><br>";
		echo "User Name : ".$_REQUEST['txt1'];
		echo "<br>email adress :".$_REQUEST['txt3'];
		echo "<br><br>Your hobbies are as follows : <br>";
		foreach($_REQUEST['r'] as $x)
		{
		echo $x."<br>";
		}
		echo "<br>GENDER : ".$_REQUEST['rb'];
		echo "<br>Name of File : ".$_FILES['files']['name'];
		echo "<br>Temp. Name of File : ".$_FILES['files']['tmp_name'];
		echo "<br>Type Of File : ".$_FILES['files']['type'];
		echo "<br>Size of File :".$_FILES['files']['size'];
		echo "<br>ERROR in File :".$_FILES['files']['error'];
		
		move_uploaded_file($_FILES['files']['tmp_name'],"upload/".$_FILES['files']['name']);	
}	
?>
<html>
	<head> <br> <h1> FILE </h1></head>
	<body><br><img src="upload/<?php echo $_FILES['files']['name']; ?>" height="300" width="300"></body>
	</html>