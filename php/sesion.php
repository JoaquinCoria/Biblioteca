<?php
    session_start();
    include_once('../Libros.php');
    include_once('../Usuario.php');
    include_once('../Biblioteca.php');
    $biblioteca = unserialize($_SESSION['biblioteca']);
    if(isset($_POST['iniciarSesion']))
    {
        $usuarios = $biblioteca->__GET("usuariosRegistrados");
        foreach($usuarios as $usuario)
        {
            if($usuario->__GET("nombre") == $_POST['nombre']){
                $_SESSION['nombreUsuario'] = $_POST['nombre'];
                header('location: ../index.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <center>
    <form action = "sesion.php" method = "post">
        <h1>Iniciar Sesión</h1>
        <label for="nombre">Nombre</label>
        <input type="text" name = "nombre"><br><br>
        <button type = "submit" name = "iniciarSesion">Iniciar sesión</button>
        <a href="../index.php">Volver</a>
    </form>
    </center>
</body>
</html>