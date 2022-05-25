<?php
// connect to the database
// mysqli_connect(host, user, pass, database);
$conexion = mysqli_connect('localhost', 'root', '', 'pd3');

$conexioncontacto = mysqli_connect('localhost', 'root', '', 'contactos');

$conexion = mysqli_connect("localhost","root","", "sitio") or die ('No se pudo conectar a la base de datos, por favor comuníquese con el administrador del sistema');


?>

