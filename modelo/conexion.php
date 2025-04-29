<?php
//scrip para crear una conexion con la base de datos
//parametros requeridos para la conexion de la base de datos
//parametro base de datos local
/*DEFINE('USER', 'root'); //crea la constante USER con el valor root
DEFINE('PW','');
DEFINE('HOST', 'localhost');
DEFINE('BD', 'empresa');*/

//parameyros BD remota (infinityfree)
DEFINE('USER', 'if0_38542090'); 
DEFINE('PW','alanwalker12144');
DEFINE('HOST', 'sql100.infinityfree.com');
DEFINE('BD', 'if0_38542090_empresa');

//conexion con la BD 
$conexion = mysqli_connect(HOST, USER, PW, BD);
// Establecer conjunto de caracteres para el hosting
mysqli_set_charset($conexion, "utf8mb4");

//verificar la conexion con la base de datos
if(!$conexion)
{
    die("La conexion con la base de datos fallo: " + mysqli_error($conexion));
    exit();
}
/*else
{
    die("la conexion a la BD fue exitosa!");
}*/
?>