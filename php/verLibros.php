<?php
    include_once('../Libros.php');
    $libros[] = new Libro("Harry potter", "J.K Rowling", 123456, TRUE);
    $libros[] = new Libro("El principito", "Antoine de Saint-Exupéry", 234567, TRUE);
    $libros[] = new Libro("El laberinto del fauno", "Cornelia Funke", 345678, TRUE);
    $libros[] = new Libro("Las cronicas de narnia", "C.S Lewis", 456789, TRUE);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <table>
        <tr>
            <td>
                Titulo
            </td>
            <td>
                Autor
            </td>
            <td>
                isbn
            </td>
        </tr>
        <?php
        foreach($libros as $i => $value)
        {
            echo $value.getTitulo();
            echo '<tr>
                <td>';
    
            echo'</td>
                <td>
    
                </td>
                <td>
                </td>
            </tr>';
        }
        ?>
    </table>
</head>
<body>
    
</body>
</html>