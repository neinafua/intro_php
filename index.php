<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <h1>Página principal del sitio</h1>
    <h2>Achinti Morales Hernández</h2>

    <h3>Iniciar sesión</h3>
    <form method="POST" action="modelo/loguear.php">
        <label for="email">Correo electrónico:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="ingresar">
    </form>
</body>
</html>
