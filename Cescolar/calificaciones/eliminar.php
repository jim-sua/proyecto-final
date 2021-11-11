<?php
$id = $_GET['id'];

include("../bd/conexion.php");

$sql = "DELETE FROM alumnos WHERE Id = '$id'";
$rta = mysqli_query($conexion, $sql);
header("Location: calificaciones.php");
?>