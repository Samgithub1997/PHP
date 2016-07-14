<?php
error_reporting(0);
	$http_client_ip=$_SERVER['HTTP_CLIENT_IP'];
	$http_x_forwarded_for=$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote_addr=$_SERVER['REMOTE_ADDR'];
	if(!empty($http_client_ip)){
		$ip_address=$http_client_ip;
	}
	else if(!empty($http_x_forwarded_for)){
		$ip_address=$http_x_forwarded_for;
	}
	else if (!empty($remote_addr)){
		$ip_address=$remote_addr;
	}
	$handle=fopen("ips.txt",'w');
	fwrite($handle,$ip_address."\n");
	fclose($handle);
?>