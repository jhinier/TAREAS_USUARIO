<!DOCTYPE html>
<html lang="en">
<!-- Project Name: Responsive Login Page
Youtube: https://youtube.com/@devRasen
Copyright: 2023 ©MdRasen -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrarse</title>
  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../Style/Registro.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="login-box">
      <!-- Login Form -->
      <form action="../Model/MRegistroUsuario.php" method="post">
        <h2>Registrarse</h2>
        <div class="input-box">
            <label for="">Email</label>
          <input type="email" name="correo_electronico"required  />
        </div>
        <div class="input-box">
            <label for="">Contraseña</label>
          <input type="password" required name="contraseña"/>
        </div>
        <div class="input-box">
            <label for="">Nombre</label>
          <input type="text"  required name="nombre_usuario"/>
        </div>
        <div class="input-box">
            <label for="">Apellido</label>
          <input type="text"  required name="apellido"/>
        </div>
        <button type="submit">Registrar</button><br><br>
        <div class="regresarL">
        <a href="../index.html" class="regresar"><i class="fas fa-arrow-left"></i></a>
        </div>

      </form>
    </div>
  </div>
</body>

</html>