<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Usuario no autorizado</title>
  </head>
  <body>
  <section class="login">
    <h3><?php echo $_SESSION["ERROR"]; ?></h3>

    <a href="registro.php">Ir a Registro</a>
  </section>
  </body>
</html>

<?php
    session_unset();
    session_destroy(); 

?>

