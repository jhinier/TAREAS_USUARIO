<?php
$op=$_GET['op'];
switch ($op) {
    case 1: include('../View/VRegistroUsuario.php');  break;
    case 2: include('../View/VLogin.php'); break;
}  