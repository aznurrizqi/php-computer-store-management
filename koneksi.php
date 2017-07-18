<?php
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "db_komputer";
	$con = mysql_connect($host,$user,$pass) or die (mysql_error());
	mysql_select_db("db_komputer",$con) or die (mysql_error());
?>
