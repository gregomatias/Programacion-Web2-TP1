<?php
session_start();

require_once 'limpiar.php';


if (isset($_POST["enviar"])) { // comprobamos si se envió algo mediante el método post, en este caso un formulario

  /*Limpio los datos antes de validar vacios, para evitar que ingresen solamente un caracter invalido */
  $usuario = limpiar_dato($_POST["usuario"]);
  $clave = limpiar_dato($_POST["clave"]);
  $confirmaclave = limpiar_dato($_POST["confirmaclave"]);
  $nombre = limpiar_dato($_POST["nombre"]);
  $apellido = limpiar_dato($_POST["apellido"]);
  $email = limpiar_dato($_POST["email"]);

  if (empty($nombre)) { //Si esta vacio el campo redirecciono la pagina  
    $_SESSION["ERROR"] = $mensaje_error = "El campo 'nombre' es requerido. Fijese de no ingresar caracteres invalidos"; // de lo contrario, mostramos un mensaje de error
    header("Location: unauthorized.php");
  }
  if (empty($apellido)) { //Si esta vacio el campo redirecciono la pagina  
    $_SESSION["ERROR"] = $mensaje_error = "El campo 'apellido' es requerido. Fijese de no ingresar caracteres invalidos"; // de lo contrario, mostramos un mensaje de error
    header("Location: unauthorized.php");
  }

  if (empty($email)) { //Si esta vacio el campo redirecciono la pagina  
    $_SESSION["ERROR"] = $mensaje_error = "El campo 'email' es requerido. Fijese de no ingresar caracteres invalidos"; // de lo contrario, mostramos un mensaje de error
    header("Location: unauthorized.php");
  }


  if (empty($usuario)) { //Si esta vacio el campo redirecciono la pagina  
    $_SESSION["ERROR"] = $mensaje_error = "El campo 'usuario' es requerido. Fijese de no ingresar caracteres invalidos"; // de lo contrario, mostramos un mensaje de error
    header("Location: unauthorized.php");
  }

  if ($clave!=$confirmaclave) {//Valida que la clave y su confirmacion sean iguales
    $_SESSION["ERROR"] = $mensaje_error = "El campo 'clave' es distinto a su confirmacion";
    header("Location: unauthorized.php");
  }


  if (!empty($clave)) { // comprobamos si el campo "clave" contiene información

    $_SESSION["USUARIO"] = $usuario;
  } else {

    $_SESSION["ERROR"] = $mensaje_error = "El campo 'clave' es requerido. Fijese de no ingresar caracteres invalidos"; // de lo contrario, mostramos un mensaje de error
    header("Location: unauthorized.php");
  }
} else {

  $_SESSION["ERROR"] = $mensaje_error = "No hay informaciòn POST-Vuelva a ingresar los datos";
  header("Location: unauthorized.php");
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
    <h1>Registro exitoso<! /h1>
        <h2>Usuario Loguenado: <?php echo $_SESSION["USUARIO"]; ?></h2>
        <a href="logout.php">Cerrar Sesion</a>

        </div>

</body>

</html>