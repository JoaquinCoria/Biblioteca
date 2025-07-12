<?php
    session_start();
    include_once('Libros.php');
    include_once('Usuario.php');
    include_once('Biblioteca.php');
    if(!isset($_SESSION['biblioteca'])){
        include_once('DeclararObjetos.php');
    }
    $biblioteca = unserialize($_SESSION['biblioteca']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <form action="index.php" method = "post">
    <?php
    if(!isset($_SESSION['nombreUsuario']))
    {
        ?>
        <a href="./php/registrar.php">Registrarse</a><br>
        <a href="./php/sesion.php">Iniciar sesión</a><br>
        <?php
    }else{
        ?>
        <a href="./php/cerrarSesion.php">Cerrar sesión</a><br>
        <?php
    }
    ?>
    <a href="./php/verLibros.php">Ver libros</a><br>
    <?php
        if(isset($_SESSION['nombreUsuario']))
        {
            echo '<a href="./php/librosDisponibles.php">Ver libros disponibles</a><br>';
            echo '<a href="./php/librosPrestados.php">Ver libros prestados</a>';
        }
    ?>
    </form>
</body>
</html>