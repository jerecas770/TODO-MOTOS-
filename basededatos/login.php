<?php
session_start();

// Usuario y contraseña válidos
$usuario_valido = "admin@gmail.com";
$contrasena_valida = "1234";

// Recibir datos del formulario
$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validación
if ($correo === $usuario_valido && $contrasena === $contrasena_valida) {

    // Crear sesión
    $_SESSION['usuario'] = $correo;

    // REDIRIGIR a productos.php (misma carpeta)
    header("Location: productos.php");
    exit();

} else {
    echo "<script>
        alert('Correo o contraseña incorrectos');
        window.location.href='../login.html';
    </script>";
}
?>
