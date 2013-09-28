<?php
    $dbhost = 'localhost'; // database host
    $dbuser = 'root'; // database username
    $dbpass = ''; // database password
    $db     = 'arena'; // the database
    $conn   = mysql_connect($dbhost, $dbuser, $dbpass) or die("Could not connect to the database"); // creat a connection or die
    mysql_select_db($db) or die("I couldn't find the database"); // select the database or die
	
	
	$launch = mktime(12, 0, 0, 10, 14, 2013);
	$now = time();
	
?>