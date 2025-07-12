<?php
    session_start();
    include_once('Libros.php');
    include_once('Usuario.php');
    include_once('Biblioteca.php');
    if(!isset($_SESSION['biblioteca'])){
        // Inserta datos como ejemplo
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
    <style>
        body{
            padding:30px;
        }
        a{
            margin:30px;
            background-color:#aaaaaa;
            padding:10px;
            text-decoration:none;
            color:black;
            border-radius: 10px;
            transition: 200ms;
        }
        a:hover{
            background-color:white;
            box-shadow: black 2px 2px 7px;
            transition: 200ms;
        }
    </style>
    <center>
    <?php
    if(!isset($_SESSION['nombreUsuario']))
    {
        ?>
        <a href="./php/registrar.php">Registrarse</a>
        <a href="./php/sesion.php">Iniciar sesión</a>
        <?php
    }else{
        ?>
        <a href="./php/cerrarSesion.php">Cerrar sesión</a>
        <?php
    }
    ?>
    <a href="./php/verLibros.php">Ver libros</a>
    <?php
        if(isset($_SESSION['nombreUsuario']))
        {
            echo '<a href="./php/librosDisponibles.php">Ver libros disponibles</a>';
            echo '<a href="./php/librosPrestados.php">Ver libros prestados</a>';
        }
    ?>
    </center>
</body>
</html>