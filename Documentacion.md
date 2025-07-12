# Titulo
## Sistema de Gestión de Biblioteca (POO)
#### Alumnos: Santino Di Fiore, Joaquín Coria
# Descripcion del proyecto
Este proyecto trata de una biblioteca en la cual hay libros que se pueden pedir prestado mediante un usuario ya reguistrado, manipulando objetos para lograr ello.

# Uso
### Crear usario
1) Para registrarse hay que ingresar el nombre únicamente
2) Al iniciar sesión se habilitará desde el index el apartado de "Libros Disponbiles"
### Pedir libro
1) Desde el index se debe acceder al apartado "Libros disponibles"
2) Se presentara una tabla la cuál contiene los libros disponibles
3) Seleccione mediante un radio el libro que desea pedir prestado
4) Luego de seleccionar debe tocar en el boton "Pedir"
### Ver todos libros 
1) En el index se presenta el aparatado "Ver libros"
2) Dentro habra una tabla con todos los libros de la bibloteca, tanto los "Disponibles" como los "No Disponbile"
3) Para regresar al index hay un boton "volver"
### Libros Prestados
1) Una vez que el usuario haya pedido el libro tendrá un apartado en el index llamado "Libros Prestados" 
2) Dentro de "Libros Prestados" encontrará una tabla con los libros que encargo el usuario
3) Podrá seleccionar los libros que deseés devolver con un radio
4) Finalizando tendras que tocar el botón "Devolver" para que este disponible en la biblioteca
5) Podras salir de este sitio con el boton "volver"
# Estructura del proyecto (carpetas y archivos principales)
```
(BIBLIOTECA)              
├── php
│   └── agregar.php
│   └── agregarLibro.php   
│   └── registar.php 
│   └── sesion.php   
│   └── verLibros.php                           
│── Biblioteca.php
│── DeclararObjetos.php
│── Index.php
│── Libros.php
│── Usuario.php
```

# Tecnologías utilizadas
* PHP: Se utilizo como instancia de objeto
* HTML: Para darle estructura y forma a la pagina 
# Metodos claves utilizados
* El constructor sirve para declarar un objeto 
* El GET lo utilizamos para tomar los atributos del objeto
### Bibliteca
* ``listarLibrosDisponibles()``: Devuelve un array con los libros disponibles.
* ``registrarUsuario(Usuario $usuario)``: Registra un nuevo usuario.
### Libros
* ``prestar()``: Cambia el estado a no disponible.
* ``devolver()``: Marca el libro como disponible.
* ``estaDisponible()``: Retorna un booleano indicando si el libro puede prestarse.
### Usuario
* ``pedirLibro(Libro $libro)``: Intenta tomar un libro en préstamo.
* ``devolverLibro(string $isbn)``: Devuelve un libro basado en el ISBN.
* ``verLibrosPrestados()``: Devuelve todos los libros actualmente en posesión del usuario.
# Clases
## Biblioteca
 La clase Bibliteca la utilizamos para el funcionamiento del sistema ya que esta almacena los libros y los usuarios reguistrados.
### Atributos 
* `` nombre ``: Este es el nombre de biblioteca
* ``coleccionLibros``: Todos los libros de la biblioteca
* ``usuariosReguistrados`` : almacena los usuarios reguistrados
## Libros
Esta clase la utilizamos para las caracteristicas de cada libro como objeto la cual tiene sus propios atributos
### Atributos
* ``titulo``: Es el titulo de cada libro
* ``autor``: Muestra el nombre del autor del libro
* `` isbn``: El isbn es el codigo del libro
* ``libroDisponible``: Muestra los libros que estan disponibles
## Usuario
Son los usuarios reguistrados en la biblioteca el cual puede pedir prestado los libros y devolverlos
* ``nombre``: El nombre del usaurio
* ``idUsuario``: Es el id unico de cada usuario


