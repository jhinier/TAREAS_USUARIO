<?php
include("../Config/conf.php");

$correo_electronico=$_POST['correo_electronico'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre_usuario'];
$apellido=$_POST['apellido'];

$sql="INSERT INTO usuarios(correo_electronico,contraseña,nombre_usuario,apellido) VALUES('$correo_electronico','$contraseña','$nombre','$apellido')";
$result=mysqli_query($conexion,$sql);

if($result)
{
    header("location: ../View/VLogin.php");
}
else
{
    echo"Error al registrarse";
}