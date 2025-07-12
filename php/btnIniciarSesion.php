<?php
    $usuarios = $biblioteca->__GET("usuariosRegistrados");
    print_r($usuarios);
    foreach($usuarios as $usuario)
    {
        if($usuario->__GET("nombre") == $_POST['nombre']){
            $_SESSION['nombreUsuario'] = $_POST['nombre'];
        }
    }
?>