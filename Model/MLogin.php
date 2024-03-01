<?php
include("../Config/conf.php");

$correo_electronico = $_POST['correo_electronico'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM usuarios WHERE correo_electronico='$correo_electronico' AND contraseña='$contraseña'";
$result = mysqli_query($conexion, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    if ($correo_electronico == 'administrador@gmail.com' && $contraseña == '123456') {
        // Correo y contraseña del administrador coinciden, redirigir a la página principal
        header("location: ../Admin/index.php");
        exit;
    }
        else{
    // Usuario encontrado, redirigir a la página principal
    header("location: ../index.html");
    exit;
        }
} else {
    // El usuario no fue encontrado o las credenciales del administrador son incorrectas
    header("location: ../View/VLogin.php?error=correo");
    exit;
}




