<?php
    session_start();
    include_once('../Libros.php');
    include_once('../Usuario.php');
    include_once('../Biblioteca.php');
    if(isset($_POST['registrarse']))
    {
        $biblioteca = unserialize($_SESSION['biblioteca']);
        $biblioteca->registrarUsuario($_POST['nombre']);
        $_SESSION['biblioteca'] = serialize($biblioteca);
        header("location:./sesion.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./registrar.php" method = "post">
        <center><h1>Registarse</h1></center>
        <label for="nombre">Nombre</label>
        <input type="text" name = "nombre">
        <button type = "submit" name = "registrarse">Registrar</button>
    </form>
    <a href="../index.php">Volver</a>
    <a href="./sesion.php">Inciar Sesión</a>
</body>
</html>