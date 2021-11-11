<?php
include("../bd/conexion.php");
$id = $_POST['id'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];


$sql = "UPDATE usuarios set Nombre='$nom', Apellidos='$ape', Usuario='$n1', Telefono='$n2', Correo='$n3' WHERE Id= '$id'";
$rta = mysqli_query($conexion, $sql);

header("Location: usuarios.php");
?>