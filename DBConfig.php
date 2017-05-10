<?php

//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "fly";

//Define your database password here.
$password = "ifly";

//Define your database name here.
$dbname = "iflyevents";

 $conn = mysql_connect($hostname, $username, $password);
 
 if (!$conn)
 
 {
 
 die('Could not connect: ' . mysql_error());
 
 }
 
 mysql_select_db($dbname, $conn);



?>