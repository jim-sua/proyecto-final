<?php
include("../bd/conexion.php");
$id = $_POST['id'];
$mat = $_POST['mat'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$sql = "UPDATE materias set Id_materia='$mat', Materia='$n1', Descripcion='$n2' WHERE Id= '$id'";
$rta = mysqli_query($conexion, $sql);
header("Location: cursos.php");
?>