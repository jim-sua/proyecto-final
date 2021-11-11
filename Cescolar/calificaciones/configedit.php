<?php
include("../bd/conexion.php");
$id = $_POST['id'];
$mat = $_POST['mat'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];
$n6 = $_POST['n6'];
$n7 = $_POST['n7'];
$n8 = $_POST['n8'];
$sql = "UPDATE alumnos set Matricula='$mat', Nota1='$n1', Nota2='$n2', Nota3='$n3', Nota4='$n4', Nota5='$n5', Nota6='$n6', Nota7='$n7', Nota8='$n8' WHERE Id= '$id'";
$rta = mysqli_query($conexion, $sql);
if ($rta) {
 header("Location: calificaciones.php");
 
}else {
    echo("Error description:" . mysqli_error($conexion));
}
?>