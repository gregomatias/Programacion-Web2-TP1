<?php
session_start();
require_once 'limpiar.php';


if (isset($_POST["enviar"])) { // comprobamos si se envió algo mediante el método post, en este caso un formulario

  if (!empty($_POST["usuario"])) { // comprobamos si el campo "usuario" contiene información


    if (!empty($_POST["clave"])) { // comprobamos si el campo "clave" contiene información

      $usuario =  limpiar_dato($_POST["usuario"]); // almacenamos la información del campo "usuario" en una variable
      $clave =  limpiar_dato($_POST["clave"]); // almacenamos la información del campo "clave" en una variable

      if ($usuario == "hernan" && $clave == "roldan") { //Si en nombre de usuario coincide

        $_SESSION["USUARIO"] = $usuario;
      } else {
        $_SESSION["ERROR"] = $mensaje_error = "Usuario y/o Contraseña incorrecto.";
        header("Location: unauthorized.php");
      }
    } else {

      $_SESSION["ERROR"] = $mensaje_error = "El campo 'clave' es requerido."; // de lo contrario, mostramos un mensaje de error
      header("Location: unauthorized.php");
    }
  } else {

    $_SESSION["ERROR"] = $mensaje_error = "El campo 'usuario' es requerido."; // de lo contrario, mostramos un mensaje de error
    header("Location: unauthorized.php");
  }
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>

  <div id="login-imagen">
    <img src="hernan.jpg" alt="Hernan" width="40px" height="40px">
    <p><?php echo $_SESSION["USUARIO"]; ?></p>
  </div>
  <section class="login">
    <h1>¡Inicio de sesión exitoso<! /h1>
        <h2>Usuario Loguenado: <?php echo $_SESSION["USUARIO"]; ?></h2>
        <a href="logout.php">Cerrar Sesion</a>

        </div>

        <!--Efecto Wrap start-->
        <div class="effect-wrap">
          <div class="effect effect-1">
          </div>
          <div class=" effect effect-2">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
          <div class="effect effect-3"></div>
          <div class="effect effect-4"></div>
          <div class="effect effect-5">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          </div>
        </div>
        <!--Efecto Wrap end-->

</body>

</html>