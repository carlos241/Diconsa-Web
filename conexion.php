<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "diconsaweb";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}

?>