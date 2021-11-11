<?php
session_start();
include 'bd/conexion.php';

$user = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario='$user' and Contraseña='$contraseña'");
if(mysqli_num_rows($validar_login) >0) {
    $_SESSION['usuario']=$user;
    header("location:principal.php");
    exit;
}else{
    echo'
    <script>
    alert("Error de datos");
    window.location = "index.php";
    </script>

    ';
    exit;
}

?>