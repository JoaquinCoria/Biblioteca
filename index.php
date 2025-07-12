<?php
    session_start();
    include_once('DeclararObjetos.php');
    print_r($_POST); echo "<br>";
    print_r($_SESSION);echo "<br>";
    print_r($biblioteca->__GET("usuariosRegistrados"));echo "<br>";
    if(isset($_POST['boton'])){
        switch($_POST['boton']){
            case 'registrarse':
                include_once('./php/registrar.php');
                break;
            case 'registrar':
                include_once('./php/btnRegistrarse.php');
                print_r($biblioteca->__GET("usuariosRegistrados"));
                echo "hola";
                break;
            case 'iniciarSesion':
                include_once('./php/sesion.php');
                break;
            case 'sesion':
                include_once('./php/btnIniciarSesion.php');
                break;
            case 'cerrarSesion.php':
                include_once('./php/cerrarSesion.php');
                break;
            case 'verLibros':
                include_once('./php/verLibrosDisponibles.php');
                break;
        }
    }

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
        <button type = "submit" name = "boton" value = "registrarse">Registrarse</button><br>
        <button type = "submit" name = "boton" value = "iniciarSesion">Iniciar sesión</button><br>
        <?php
    }else{
        ?>
        <button type = "submit" name = "boton" value = "cerrarSesion">Cerrar sesión</button><br>
        <?php
    }
    ?>
    <a href="./php/agregarLibro.php">Agregar libro</a><br>
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