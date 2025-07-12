<?php
    session_start();
    include_once('../Libros.php');
    include_once('../Usuario.php');
    include_once('../Biblioteca.php');
    $biblioteca = unserialize($_SESSION['biblioteca']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
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
               <b> Está disponible</b>
            </td>
        </tr>
        <?php
        $todosLosLibros = $biblioteca->__GET("coleccionLibros");
        foreach($todosLosLibros as $i => $value)
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
                <td>'
                . $value->estaDisponible().
            '</tr>';
        }
        ?>
    </table>
    <a href="../index.php">Volver</a></center>
</body>
</html>