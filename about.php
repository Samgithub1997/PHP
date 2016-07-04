<?php
echo "<strong>hello world yaar.. </strong>";
echo date ('Y');
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];
echo "<p> You are running the file : <b> $file </b> </p> \n";
echo "<p> You re viewing this page using <b> $user </b></p> \n";
echo '<p> You are using the server :<b>'. $server .'</b></p>\n The server is running version ' .PHP_VERSION .' of php on '.PHP_OS .' operating system alright...';
?>
