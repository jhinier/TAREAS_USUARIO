<!DOCTYPE html>
<html lang="es">
<!-- Project Name: Responsive Login Page
Youtube: https://youtube.com/@devRasen
Copyright: 2023 ©MdRasen -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Login Page | devRasen</title>
  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../Style/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="login-box">
      <!-- Login Form -->
      <form action="../Model/MLogin.php" method="POST" id="loginForm">
        <h2>Login</h2>
        <div class="input-box">
          <span class="icon"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" required placeholder="Email" name="correo_electronico" />
        </div>
        <?php if(isset($_GET['error']) && $_GET['error'] === 'correo'): ?>
        <div class="error-message">El correo o contraseña es incorrecto.<br> Por favor, inténtalo de nuevo.</div>
        <?php endif; ?>
        <div class="input-box">
          <span class="icon"><i class="fa-solid fa-lock"></i></span>
          <input type="password" placeholder="Password" name="contraseña" required />
        </div><br>
        <button type="submit">Login</button><br>
        <div class="register-link">
          <a href="../View/VRegistroUsuario.php">REGISTRARSE</a>
        </div>
        <div class="regresarL">
        <a href="../index.html" class="regresar"><i class="fas fa-arrow-left"></i></a>
        </div>

      </form>
      <script>
    // Detectar cuando el usuario comienza a escribir en el campo de correo electrónico
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('loginForm').reset();
        var correoElectronicoInput = document.querySelector('input[name="correo_electronico"]');
        correoElectronicoInput.addEventListener('input', function() {
            // Ocultar el mensaje de error cuando el usuario comience a escribir
            var errorMensaje = document.querySelector('.error-message');
            if (errorMensaje) {
                errorMensaje.style.display = 'none';
            }
        });
    });
</script>
    </div>
  </div>
</body>

</html>