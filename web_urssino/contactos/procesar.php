<?php
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resultado del Formulario</title>
</head>
<body>
  <h1>Resultado del Formulario</h1>
  <p>Usuario: <?php echo htmlspecialchars($usuario); ?></p>
  <p>Contraseña: <?php echo htmlspecialchars($contraseña); ?></p>
  <a href="../index.php">Volver al inicio</a>
</body>
</html>
