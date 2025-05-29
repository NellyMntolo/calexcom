<?php
		$dbhost = 'localhost';

	   	$dbuser = 'root'; 
	   	$dbpass = '123456';
	   	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	   	mysql_select_db('new_calex_web');
	   	mysql_set_charset("utf8");
	   	mysql_query("SET NAMES 'utf8'");	
	   	mysql_query("SET CHARACTER SET utf8", $conn); 


	   	if(! $conn )
	   {
	      die('Could not connect: ' . mysql_error());
	   }
error_reporting(0);
/*
$dsn = 'mysql:host=localhost;dbname=livenrich';
$username = 'root';
$password = '123456';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$conn = new PDO($dsn, $username, $password, $options);
*/