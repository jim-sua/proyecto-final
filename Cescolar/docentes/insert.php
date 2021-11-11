<?php 

include'../bd/conexion.php';

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['name']) >= 1 && 
	    strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['cedula']) >= 1 &&
	    strlen($_POST['email']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
		strlen($_POST['descripcion']) >= 1){
	    $nombre = trim($_POST['name']);
		$apellidos = trim($_POST['lastname']);
        $cedula = trim($_POST['cedula']);
	    $email = trim($_POST['email']);
		$telefono = trim($_POST['telefono']);
        $descripcion = trim($_POST['descripcion']);

	    $consulta = "INSERT INTO `docentes` (`Nombre`, `Apellidos`, `Cedula`, `Correo`, `Telefono`, `Descripcion`) 
		VALUES ('$nombre', '$apellidos', '$cedula','$email', '$telefono', '$descripcion')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	echo'
            <script>
    alert("Se ha agrado un nuevo docente");
    window.location = "docente.php";
    </script>
            ';
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>