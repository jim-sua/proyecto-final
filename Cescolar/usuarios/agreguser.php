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

            <a href="cursos.php">
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

            <a href="usuarios.php">
                <div class="option">
                <i class="bi bi-people-fill"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
        
  
   
  
    <div class="contendedorform">
<form action="insert.php" method="POST">
<h1>Agregar un nuevo usuario</h1><br>
<input type="text" name="name" placeholder="Nombre"><br>
<input type="text" name="lastname" placeholder="Apellidos"><br>
<input type="text" name="user" placeholder="Usuario"><br>
<input type="tel" name="telefono" placeholder="Telefono"><br>
<input type="email" name="email" placeholder="Correo electronico"><br>
<input type="password" name="contraseña" placeholder="Contraseña"><br>
<input type="file" name="perfil" placeholder="Foto"><br>
<input type="submit" value="Registrar" name="Registrar" >

</form>



  </div>
  		
  	
    
    
    </main>
    <script src="../js/script.js"></script>
</body>

</html>