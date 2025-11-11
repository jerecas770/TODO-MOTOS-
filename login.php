<?php
session_start();
$error = "";

if (isset($_POST['login'])) {
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave'];

  if ($usuario === 'admin' && $clave === 'admin123') {
    $_SESSION['admin'] = true;
    header("Location: administrarProductos.php");
    exit;
  } else {
    $error = "Usuario o contraseña incorrectos.";
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login Administrador</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Acceso Administrador</h2>
  <form method="POST">
    <input type="text" name="usuario" placeholder="Usuario" required><br>
    <input type="password" name="clave" placeholder="Contraseña" required><br>
    <button type="submit" name="login">Ingresar</button>
  </form>
  <p style="color:red;"><?php echo $error; ?></p>
</body>
</html>
