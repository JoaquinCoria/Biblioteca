<?php
    session_start();
    include_once("../DeclararObjetos.php");
    if(isset($_POST['isbn']))
    {
        $todosLosLibros = $biblioteca->__GET("coleccionLibros");
        $todosLosUsuarios = $biblioteca->__GET("usuariosRegistrados");
        foreach($todosLosUsuarios as $value){
            if($value->__GET("nombre") == $_SESSION['nombreUsuario']){
                $usuario = $value;
            }
        }
        foreach($todosLosLibros as $libro)
        {
            if($libro->__GET("isbn") == $_POST['isbn']){
                $usuario->pedirPrestado($libro);
                print_r($usuario->__GET("librosPrestados"));
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
        $librosDisponibles = $biblioteca->listarLibrosDisponibles();
        foreach($librosDisponibles as $i => $value)
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
    <button type = "submit" name = "pedir">Pedir</button>
    </form>
    </center>
</body>
</html>