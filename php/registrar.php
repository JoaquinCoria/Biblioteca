<?php
    if(isset($_POST['registrarse']))
    {
        if($_POST['registrarse'] == "registrar")
        {
            $biblioteca->registrarUsuario($_POST['nombre']);
            header("location:../index.php");
        }
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
    <form action = "./index.php" method = "post">
        <center><h1>Registarse</h1></center>
        <label for="nombre">Nombre</label>
        <input type="text" name = "nombre">
        <button type = "submit" name = "boton" value = "registrar">Registrar</button>
    </form>
    <a href="../index.php">Volver</a>
    <a href="./sesion.php">Inciar Sesión</a>
</body>
</html>