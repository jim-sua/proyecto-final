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

            <a href="../docentes/docente.php">
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

            <a href="calificaciones.php">
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
  
  	<table>
  		<thead>
            <th>Id</th>
  			<th>Matricula_alumno</th>
  			<th>Ingles</th>
  			<th>Proyectos ambientales I</th>
            <th>Compiladores</th>
            <th>Base de datos</th>	
            <th>Contabilidad</th>	
            <th>Investigacion de operaciones II</th>	
            <th>Programacion Web</th>
            <th>Redes</th>
            <th>Nota</th>
            		
          <?php 
        include("../bd/conexion.php");
		$sql="SELECT Id, Matricula, Nota1, Nota2, Nota3, Nota4, Nota5, Nota6, Nota7, Nota8, ROUND((Nota1+Nota2+Nota3+Nota4+Nota5+Nota6+Nota7+Nota8)/8, 1) as Promedio from alumnos
		order by Promedio desc";

        $result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_row($result)){
		 ?>

		<tr>
            <td><?php echo $mostrar[0] ?></td>
			<td><?php echo $mostrar[1] ?></td>
			<td><?php echo $mostrar[2] ?></td>
			<td><?php echo $mostrar[3] ?></td>
            <td><?php echo $mostrar[4] ?></td>
            <td><?php echo $mostrar[5] ?></td>
            <td><?php echo $mostrar[6] ?></td>
            <td><?php echo $mostrar[7] ?></td>
            <td><?php echo $mostrar[8] ?></td>
            <td><?php echo $mostrar[9] ?></td>
            <td><?php echo $mostrar[10] ?></td>
                            
            
                        <td>
                            <a href="editar.php?
                            id=<?php echo $mostrar[0] ?>&
			                mat=<?php echo $mostrar[1] ?>&
                            n1=<?php echo $mostrar[2] ?> &
                            n2=<?php echo $mostrar[3] ?> &
                            n3=<?php echo $mostrar[4] ?> &
                            n4=<?php echo $mostrar[5] ?> &
                            n5=<?php echo $mostrar[6] ?> &
                            n6=<?php echo $mostrar[7] ?> &
                            n7=<?php echo $mostrar[8] ?> &
                            n8=<?php echo $mostrar[9] ?> 
                            ">Editar</a>
                            <a href="eliminar.php? id= <?php echo $mostrar[0] ?>">Eliminar</a>
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