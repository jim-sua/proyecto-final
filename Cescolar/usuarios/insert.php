
<?php

include("../bd/conexion.php");

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $user = $_POST['user'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $perfil = $_POST['perfil'];
    $contraseña = hash('sha512', $contraseña);

    $consulta = "INSERT INTO usuarios (Nombre, Apellidos, Usuario, Telefono, Correo, Contraseña, Perfil) 
		VALUES ('$name', '$lastname', '$user', '$telefono', '$email', '$contraseña', '$perfil')";
	    $resultado = mysqli_query($conexion,$consulta);
if ($resultado) {
    echo'
    <script>
alert("Haz agreado un nuevo usuario");
window.location = "usuarios.php";
</script>
    ';
}
        
       
?>