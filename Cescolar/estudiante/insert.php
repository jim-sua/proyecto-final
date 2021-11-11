<?php 

include'../bd/conexion.php';

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['name']) >= 1 && 
	    strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['matricula']) >= 1 &&
	    strlen($_POST['grado']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
		strlen($_POST['telefono']) >= 1){
	    $nombre = trim($_POST['name']);
		$apellidos = trim($_POST['lastname']);
        $cedula = trim($_POST['matricula']);
	    $grado = trim($_POST['grado']);
		$email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);

	    $consulta = "INSERT INTO `alumnos` (`Nombre`, `Apellidos`, `Matricula`, `Nivel`, `Correo`, `Telefono`) 
		VALUES ('$nombre', '$apellidos', '$cedula','$grado', '$email', '$telefono')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	echo'
            <script>
    alert("Se ha agrado un nuevo estudiante");
    window.location = "estudiante.php";
    </script>
            ';
	    } else {
	    	?> 
	    	<h3 class="bad">Ha ocurrido un error</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Se requiere completar los campos!</h3>
           <?php
    }
}

?>