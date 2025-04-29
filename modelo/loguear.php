<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query1 = "SELECT email, COUNT(*) AS contar FROM usuario WHERE email = '$email' AND password = '$password'"; 

    $consulta = mysqli_query($conexion, $query1) or die("Error en la consulta MySQL: " . mysqli_error($conexion));

    $resultado = mysqli_fetch_array($consulta);

    if($resultado['contar'] > 0) {
        echo "El usuario existe en la BD<br>";
        echo "Correo: " . $resultado['email'];
    } else {
        echo "El usuario no existe, o usuario o contraseña incorrecta";
    }
}
?>
