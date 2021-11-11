<?php
include("../bd/conexion.php");
$id = $_POST['id'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

$sql = "UPDATE alumnos set Nombre='$nom', Apellidos='$ape', Matricula='$n1', Nivel='$n2', Correo='$n3', Telefono='$n4' WHERE Id= '$id'";
$rta = mysqli_query($conexion, $sql);
if ($rta) {
 header("Location: estudiante.php");
 
}else {
    echo("Error description:" . mysqli_error($conexion));
}
?>