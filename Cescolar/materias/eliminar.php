<?php
$id = $_GET['id'];

include("../bd/conexion.php");

$sql = "DELETE FROM materias WHERE Id = '$id'";
$rta = mysqli_query($conexion, $sql);
header("Location: cursos.php");
?>