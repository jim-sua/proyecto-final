<?php 

include'../bd/conexion.php';

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['Id_materia']) >= 1 && 
	    strlen($_POST['Nombre']) >= 1 &&
		strlen($_POST['Descripcion']) >= 1){
	    $id_materia = trim($_POST['Id_materia']);
		$name = trim($_POST['Nombre']);
        $descripcion = trim($_POST['Descripcion']);

	    $consulta = "INSERT INTO `materias` (`Id_materia`, `Materia`, `Descripcion`) 
		VALUES ('$id_materia', '$name', '$descripcion')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	echo'
            <script>
    alert("Se ha agrado un nuevo docente");
    window.location = "cursos.php";
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