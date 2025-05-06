<?php
require 'modelo/conexion.php';
session_start();
if(isset($_SESSION['username']))
{
    $nombre_usuario = $_SESSION['username'];
}
else {
    // Si no ha iniciado sesión, redirigir al index
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de usuario</title>
</head>
<body>
    <h1>Página usuario</h1>
    <hr>
    <?php
    echo 'Usuario: ' .$nombre_usuario;
    ?>
    <hr>
    
    <h2>Agregar nuevo empleado</h2>
    <form action="modelo/agregar_empleado.php" method="POST">
        <label>ID empleado:</label>
        <input type="text" name="id_empleado" maxlength="8" required><br><br>
        
        <label>Nombre:</label>
        <input type="text" name="nombre_empleado" maxlength="100" required><br><br>
        
        <label>Apellidos:</label>
        <input type="text" name="apellidos_empleados" maxlength="255" required><br><br>
        
        <label>Departamento:</label>
        <select name="id_departamento" required>
            <option value="">Seleccione</option>
            <?php
            $consulta = "SELECT id_departamento, nombre_departamento FROM departamento";
            $resultado = mysqli_query($conexion, $consulta);
            
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $fila['id_departamento'] . "'>" . $fila['nombre_departamento'] . "</option>";
                }
            }
            ?>
        </select><br><br>
        
        <input type="submit" value="Agregar empleado">
    </form>
    
    <hr>
    <a href="modelo/cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>