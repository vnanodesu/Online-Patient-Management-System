<?php
define('DB_SERVER','localhost');
define('DB_USER','u550809654_hms');
define('DB_PASS' ,'Skbp12345');
define('DB_NAME', 'u550809654_hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>