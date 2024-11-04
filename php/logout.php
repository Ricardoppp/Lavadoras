<?php
session_start();
session_unset();
session_destroy();
header("Location: ../login2.0.php"); // Redirige al login después de cerrar sesión
exit();
?>