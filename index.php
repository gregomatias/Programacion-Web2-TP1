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

    <title>Session Start</title>
</head>



<body>

    <header>
        <div class="informacion">
            <h1>Trabajo Practico 1</h1>
            <h2>Profesor: Hernan Roldan</h2>
            <h2>Alumno:Matias Grego</h2>
            <h2>Carrera: Analista de Sistemas</h2>


        </div>
    </header>


    <section class="form-seccion">



        <div class="container">
            <div class="form">
                <form action="home.php" method="post">
                    <input type="text" name="usuario" required autocomplete="off" value="hernan" placeholder="Ingrese el usuario">
                    <input type="password" name="clave" required autocomplete="off" value="roldan" placeholder="Ingrese la clave">
                    <button type="submit" class="boton" name="enviar">Enviar</button>


                </form>
                <a href="registro.php">¿Eres nuevo en el sitio?</a>
            </div>

        </div>
    </section>

</body>

</html>