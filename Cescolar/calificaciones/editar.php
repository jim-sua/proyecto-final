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

    <?php
$id = $_GET['id'];
$mat = $_GET['mat'];
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$n4 = $_GET['n4'];
$n5 = $_GET['n5'];
$n6 = $_GET['n6'];
$n7 = $_GET['n7'];
$n8 = $_GET['n8'];
?>
        <h1>Modificar notas.</h1><br>
  
  
    <div>
    <form action="configedit.php" method="post">
        <table>
            <tr>
                <td>Ingresar Datos:</td>
                <td><input type="text" name="id" style="visibility: hidden;"  value="<?=$id?>" id=""></td>
            </tr>
            <tr>
                <td>Matricula:</td>
                <td><input type="text" name="mat" value="<?=$mat?>" id=""></td>
            </tr>
            <tr>
                <td>Nota1:</td>
                <td><input type="number" step="any" name="n1" value="<?=$n1?>" id=""></td>
            </tr>
            <tr>
                <td>Nota2:</td>
                <td><input type="number" step="any" name="n2" value="<?=$n2?>" id=""></td>
            </tr>
            <tr>
                <td>Nota3:</td>
                <td><input type="number" step="any" name="n3" value="<?=$n3?>" id=""></td>
            </tr>
            <tr>
                <td>Nota4:</td>
                <td><input type="number" step="any" name="n4" value="<?=$n4?>" id=""></td>
            </tr>
            <tr>
                <td>Nota5:</td>
                <td><input type="number" step="any" name="n5" value="<?=$n5?>" id=""></td>
            </tr>
            <tr>
                <td>Nota6:</td>
                <td><input type="number" step="any" name="n6" value="<?=$n6?>" id=""></td>
            </tr>
            <tr>
                <td>Nota7:</td>
                <td><input type="number" step="any" name="n7" value="<?=$n7?>" id=""></td>
            </tr>
            <tr>
                <td>Nota8:</td>
                <td><input type="number" step="any" name="n8" value="<?=$n8?>" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Actualizar"></td>
            </tr>
        </table>

    </form>

    </div>
  		
  		
  	
    
    
    </main>
    <script src="../js/script.js"></script>
</body>

</html>