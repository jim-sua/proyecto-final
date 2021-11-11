<?php
include("../bd/conexion.php");
$id = $_POST['id'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

$sql = "UPDATE docentes set Nombre='$nom', Apellidos='$ape', Cedula='$n1', Correo='$n2', Telefono='$n3', Descripcion='$n4' WHERE Id= '$id'";
$rta = mysqli_query($conexion, $sql);
header("Location: docente.php");
?>