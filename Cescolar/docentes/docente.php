<?php
include '../bd/conexion.php';
session_start();
if(!isset($_SESSION['usuario'])) {
    echo'
    <script>
    alert("Porfavor, inicie sesion.");
    window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}


$usuario = $_SESSION['usuario'];
$consulta = "SELECT * FROM usuarios WHERE Usuario = '$usuario'";
$ejecuta = $conexion->query($consulta);
$row = $ejecuta->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control escolar | 5k </title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estilo1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">

    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
        <i class="bi bi-circle-fill icon-active"></i>
            <h4>
                <?php
                    echo $row ['Nombre']; 
                ?>
            </h4>
        </div>

        <div class="options__menu">

            <a href="../principal.php" class="selected">
                <div class="option">
                <i class="bi bi-house-door"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                <i class="fas fa-chalkboard-teacher"></i>
                    <h4>Profesores</h4>
                </div>
            </a>

            <a href="../estudiante/estudiante.php">
                <div class="option">
                <i class="fas fa-user-graduate"></i>
                    <h4>Alumnos</h4>
                </div>
            </a>

            <a href="../materias/cursos.php">
                <div class="option">
                <i class="bi bi-briefcase-fill"></i>
                    <h4>Cursos</h4>
                </div>
            </a>

            <a href="../calificaciones/calificaciones.php">
                <div class="option">
                <i class="bi bi-table"></i>
                    <h4>Calificaciones</h4>
                </div>
            </a>

            <a href="../usuarios/usuarios.php">
                <div class="option">
                <i class="bi bi-people-fill"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
        <h1>Listado de todos los docentes activos.</h1><br>
  
  
  <div id="contenido">
  <a href="agregardocente.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> <br><br>
  	<table>
  		<thead>
  			<th>No.</th>
  			<th>Nombre</th>
  			<th>Apellidos</th>
            <th>Cedula profesional</th>
            <th>Correo</th>
  			<th>Telefono</th>
            <th>Descripcion</th>
  		</thead>
    	
          <?php 

		$sql="SELECT * from docentes";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Id'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Apellidos'] ?></td>
            <td><?php echo $mostrar['Cedula'] ?></td>
			<td><?php echo $mostrar['Correo'] ?></td>
			<td><?php echo $mostrar['Telefono'] ?></td>
            <td><?php echo $mostrar['Descripcion'] ?></td>
            
            
                        <td>
                            <a href="editar.php?
                            id=<?php echo $mostrar['Id'] ?> &
                            nom=<?php echo $mostrar['Nombre'] ?> &
                            ape=<?php echo $mostrar['Apellidos'] ?> &
                            n1=<?php echo $mostrar['Cedula'] ?> &
                            n2=<?php echo $mostrar['Correo'] ?> &
                            n3=<?php echo $mostrar['Telefono'] ?> &
                            n4=<?php echo $mostrar['Descripcion'] ?>
                            ">Editar</a>
                            <a href="eliminar.php? id=<?php echo $mostrar['Id'] ?>">Eliminar</a>
                        </td>
        </tr>
	<?php 
	}
	 ?>
 
  	</table>
  </div>
  		
  		
  	
    
    
    </main>
    <script src="../js/script.js"></script>
</body>

</html>