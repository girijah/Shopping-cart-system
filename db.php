<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';


$conn = mysql_connect($dbhost, $dbuser, $dbpass) ;
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
echo "did not get connected to database!";
  }
mysql_select_db( 'production', $conn);


?>
