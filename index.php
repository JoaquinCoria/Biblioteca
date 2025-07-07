<?php
    include_once('Libros.php');
    $libros[] = new Libro("Harry potter", "J.K Rowling", 123456, TRUE);
    $libros[] = new Libro("El principito", "Antoine de Saint-Exupéry", 234567, TRUE);
    $libros[] = new Libro("El laberinto del fauno", "Cornelia Funke", 345678, TRUE);
    $libros[] = new Libro("Las cronicas de narnia", "C.S Lewis", 456789, TRUE);
    print_r($libros);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    
    <a href="./php/agregarLibro.php">Agregar libro</a><br>
    <a href="./php/verLibros.php">Ver libros</a>
</body>
</html>