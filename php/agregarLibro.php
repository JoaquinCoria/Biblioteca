<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar libro</title>
</head>
<body>
    <form action="agregar.php" method="post">
        <center><h1>Agregar libro</h1></center>
        <label for="Titulo">Titulo</label>
        <input type="text" name="nombre" placeholder ="Ingrese el titulo"><br>
        <label for="Autor">Autor</label>
        <input type="text" name="autor" placeholder ="Ingrese el autor"><br>
        <label for="Descripcion">Descripción</label>
        <input type="text" name="" placeholder ="Ingrese la descripción"><br>
        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" placeholder ="Ingrese la descripción"><br>
        <button type="submit">Agregar</button>
        <a href="../index.php">Volver</a>
    </form>
</body>
</html>