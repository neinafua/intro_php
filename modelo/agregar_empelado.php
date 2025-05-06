<?php
require 'conexion.php';
session_start();

// Verificar si el usuario ha iniciado sesión
if(!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $id_empleado = $_POST['id_empleado'];
    $nombre_empleado = $_POST['nombre_empleado'];
    $apellidos_empleados = $_POST['apellidos_empleados'];
    $id_departamento = $_POST['id_departamento'];
    
    // Insertar empleado en la base de datos
    $query = "INSERT INTO empleado (id_empleado, nombre_empleado, apellidos_empleados, id_departamento) 
              VALUES ('$id_empleado', '$nombre_empleado', '$apellidos_empleados', '$id_departamento')";
    
    // Ejecutar la consulta
    if(mysqli_query($conexion, $query)) {
        // Redirigir a la página de usuario
        header("Location: ../pagina_usuario.php?mensaje=agregado");
        exit();
    } else {
        echo "Error al agregar empleado: " . mysqli_error($conexion);
        echo "<br><a href='../pagina_usuario.php'>Volver</a>";
    }
} else {
    // Si no se enviaron datos por POST, redirigir a la página de usuario
    header("Location: ../pagina_usuario.php");
    exit();
}
?>