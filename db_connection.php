<?php

$server   = "localhost";
$database = "dart_db";
$username = "root";
$password = "";

	$con = mysqli_connect($server,$username,$password,$database);

if (!$con)
{
echo "DB Connection Failed";
}
else
{
//echo "done";
}
?>