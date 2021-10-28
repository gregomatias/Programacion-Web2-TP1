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
    <title>Registro</title>
</head>
<body>
<section class="form-seccion">

<div class="container">
    
    <div class="form">
    <h2 id="h2-form-registro">Formulario de Registro</h2>
        <form action="validaregistro.php" method="post">
            <input type="text" name="nombre"  required autocomplete="off" value="" placeholder="Ingrese su nombre">
            <input type="text" name="apellido" required autocomplete="off" value="" placeholder="Ingrese su apellido">
            <input type="text" name="usuario" required autocomplete="off" value="" placeholder="Ingrese su usuario">
            <input type="email" name="email" required autocomplete="off" value="" placeholder="Ingrese su correo electrónico">
            <input type="password" name="clave" required autocomplete="off" value="" placeholder="Ingrese la clave">
            <input type="password" name="confirmaclave" required autocomplete="off" value="" placeholder="Confirmar clave">
            <button type="submit" class="boton" name="enviar">Enviar</button>


        </form>
        <a href="index.php">Volver a Login</a>
    </div>

</div>
</section>
    
</body>
</html>