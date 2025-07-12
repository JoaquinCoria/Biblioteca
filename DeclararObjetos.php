<?php
    // Datos de prueba
    include_once('Libros.php');
    include_once('Usuario.php');
    include_once('Biblioteca.php');
    $libros[] = new Libro("Harry potter", "J.K Rowling", 123456, TRUE);
    $libros[] = new Libro("El principito", "Antoine de Saint-Exupéry", 234567, TRUE);
    $libros[] = new Libro("El laberinto del fauno", "Cornelia Funke", 345678, TRUE);
    $libros[] = new Libro("Las cronicas de narnia", "C.S Lewis", 456789, TRUE);
    $usuarios[] = new Usuario(0, "Juan", NULL);
    $usuarios[] = new Usuario((count($usuarios)+1),"Alberto", NULL);
    $biblioteca = new Biblioteca("Biblioteca Borges", $libros, $usuarios);
?>