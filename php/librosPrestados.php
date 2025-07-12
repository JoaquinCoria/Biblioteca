<?php
    session_start();
    include_once("../DeclararObjetos.php");
    $todosLosUsuarios = $biblioteca->__GET("usuariosRegistrados");
    foreach($todosLosUsuarios as $value){
        if($value->__GET("nombre") == $_SESSION['nombreUsuario']){
            $usuario = $value;
        }
    }
    print_r($usuario);
    $librosPrestados = $usuario->verLibrosPrestados();
    if($librosPrestados==NULL)
    {
        echo "No hay libros prestados<br><a href='../index.php'>Volver</a>";
        exit();
    }
    print_r($librosPrestados);
    if(isset($_POST['isbn']))
    {
        foreach($librosPrestados as $value){
            if($value->__GET("isbn") == $_POST['isbn']){
                $libro = $value;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros disponibles</title>
</head>
<body>
    <center><h1>Libros</h1>
    <style>
        td{
            border: black 1px solid;
            padding: 5px;
            margin: 0px;
        }
    </style>
    <table>
        <tr>
            <td>
                <b>Titulo</b>
            </td>
            <td>
                <b>Autor</b>
            </td>
            <td>
                <b>ISBN</b>
            </td>
            <td>
                <b>Pedir</b>
            </td>
        </tr>
        <form action="librosDisponibles.php" method="post">
        <?php
        foreach($librosPrestados as $value)
        {
            echo '<tr>
                <td>'
                . $value->__GET("titulo").
                '</td>
                <td>'
                . $value->__GET("autor").
                '</td>
                <td>'
                . $value->__GET("isbn").
                '</td>
                <td>
                    <input type = "radio" name = "isbn" value = "'.$value->__GET("isbn").'">
                </td>
            </tr>';
        }
        ?>
        
    </table>
    <a href="../index.php">Volver</a>
    <button type = "submit" name = "pedir">Devolver</button>
    </form>
    </center>
</body>
</html>