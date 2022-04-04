<?php 
	
	$host='localhost';
	$username='root';
	$pass='';
	$db='shop';

	$conn=mysqli_connect($host,$username,$pass,$db); //establishing connection

	if(!$conn) die("Connection refused").mysql_connect_error();
 ?>
