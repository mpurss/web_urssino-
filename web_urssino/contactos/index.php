<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Contacto</title>
  <link rel="stylesheet" href="../css/estilo3.css">
  <link rel="stylesheet" href="../css/estilo.css">
  <link rel="stylesheet" href="../css/estilomovil.css">
  
  <style>
    .rss-menu {
      position: fixed;
      top: 20px;
      right: 20px;
    }
  </style>
</head>
<body>

  <!-- Flecha para volver al inicio -->
  <a href="../index.php" class="back-to-top">&#8593;</a>
  
<!-- Menú RSS -->
<div class="rss-menu">
  <nav id="desktop-nav">
    <ul class="nav-links">
      <li><a href="../inicio/index.php">Inicio</a></li>
      <li><a href="../index.php">Sobre Mi</a></li>
      <li><a href="../index.php">Servicios</a></li>
      <li><a href="../index.php">Portfolio</a></li>
    </ul>
  </nav> 
</div>

  <nav id="hamburger-nav">
    <div class="logo">Milagros</div>
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu-links">
        <li><a href="../inicio/index.php" onclick="toggleMenu()">Inicio</a></li>
        <li><a href="../index.php" onclick="toggleMenu()">Sobre Mi</a></li>
        <li><a href="../index.php" onclick="toggleMenu()">Servicios</a></li>
        <li><a href="../index.php" onclick="toggleMenu()">Portfolio</a></li>
      </div>
    </div>
  </nav>

  <section class="form-login">
    <h5>Contacto</h5>
    <form id="loginForm" action="procesar.php" method="post" onsubmit="return validarFormulario()">
      <input id="usuario" class="controls" type="text" name="usuario" value="" placeholder="Usuario">
      <input id="contraseña" class="controls" type="password" name="contraseña" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" value="Ingresar">
      <td align="center"><a href="../index.html">¿Olvidaste tu Contraseña?</a></td>
    </form>
  </section>

  <script>
    function validarFormulario() {
      var usuario = document.getElementById("usuario").value;
      var contraseña = document.getElementById("contraseña").value;

      if (usuario.trim() === "") {
        alert("Por favor ingresa tu usuario.");
        document.getElementById("usuario").style.borderColor = "red";
        return false;
      }

      if (contraseña.trim() === "") {
        alert("Por favor ingresa tu contraseña.");
        document.getElementById("contraseña").style.borderColor = "red";
        return false;
      }

      return true; 
    }
  </script>

  <script src="../js/script.js"></script>

</body>
</html>
