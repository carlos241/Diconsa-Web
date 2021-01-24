<?php 
include("conexion.php");

$nom = $_POST["nombre"];
$tel = $_POST["telefono"];
$email = $_POST["email"];
$pass = $_POST["pass"];


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos'])) {
	$sqlgrabar = "INSERT INTO usuarios(Nombre, Telefono, Usuario, Contra) values ('$nom', '$tel','$email','$pass')";

	if (mysqli_query($conn, $sqlgrabar)) {
		echo "<script> alert('Usuario registrado: $email');window.location= 'index.php' </script>";
	} else {
		echo "Error: " ;
	}
}
