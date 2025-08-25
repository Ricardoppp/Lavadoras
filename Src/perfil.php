<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre']) || !isset($_SESSION['apellido']) || !isset($_SESSION['tipo_usuario'])) {
    header("Location: login2.0.php"); // Redirigir al login si no está autenticado
    exit();
}

// Obtener los datos del usuario de la sesión
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$tipo_usuario = $_SESSION['tipo_usuario'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    <link rel="stylesheet" href="css/perfil.css">
    <style>
        .perfil-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-family: Arial, sans-serif;
}

.perfil-info p {
    font-size: 18px;
    margin: 10px 0;
}

.perfil-info strong {
    color: #333;
}

a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    color: white;
    background-color: #007bff;
    text-decoration: none;
    border-radius: 5px;
}

a:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
    <section class="perfil-container">
        <h1>Perfil del Usuario</h1>
        
        <div class="perfil-info">
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
            <p><strong>Apellido:</strong> <?php echo htmlspecialchars($apellido); ?></p>
            <p><strong>Tipo de Usuario:</strong> 
                <?php
                    // Mostrar el tipo de usuario de forma amigable
                    switch ($tipo_usuario) {
                        case "1":
                            echo "Super Administrador";
                            break;
                        case "2":
                            echo "Inventario";
                            break;
                        case "3":
                            echo "Usuario Regular";
                            break;
                        default:
                            echo "Desconocido";
                            break;
                    }
                ?>
            </p>
        </div>

        <a href="php/logout.php">Cerrar sesión</a> <!-- Enlace para cerrar sesión -->
        <a href="login2.0.php">Cambiar de Usuario</a>
    </section>
</body>
</html>