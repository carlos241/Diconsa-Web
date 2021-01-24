<?php

include("conexion.php");

$nombre = $_POST["email"];
$pass = $_POST["pass"];

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE Usuario = '" . $nombre . "' and Contra = '" . $pass . "'");
$nr = mysqli_num_rows($query);

$mostrar = mysqli_fetch_array($query);
if ($nr == 1) {
	echo "<script> window.location= 'index2.php' </script>";
} else if ($nr == 0) {
	echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}
