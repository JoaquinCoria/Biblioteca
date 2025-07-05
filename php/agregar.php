<?php
    include_once('../Libros.php');
    $libro = new Libro($_POST['nombre'], $_POST['autor'], $_POST['descripcion'], $_POST['isbn']);
    header("locate: ../index.php");
?>