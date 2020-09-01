<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Directorio</title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php
        $nombre_carpeta = $_POST['titulo'];
        $nombre_carpeta_final = ucfirst($nombre_carpeta);
        $direccion = "img/$nombre_carpeta_final";

        /* Comprobacion de variable vacia */
        if (!empty($nombre_carpeta_final)) {

            /* Comprobacion de directorio existente */
            if (!file_exists($direccion)) {

                /* Creacion del directorio */
                if (!mkdir($direccion, 0777, true)) {
                    die("<div class='jumbotron'><h1 class='display-4'>ERROR!</h1><p class='lead'>El nombre <strong>$nombre_carpeta_final</strong> ingresado no es compatible</p><hr class='my-4'><p>Texto de relleno</p><a class='btn btn-primary btn-lg' href='Prueba.php' role='button'>Crack!</a></div>");
                } else {
                    echo"<div class='jumbotron'><h1 class='display-4'>EXITO!</h1><p class='lead'>La carpeta <strong>$nombre_carpeta_final</strong> fue creada de manera exitosa</p><hr class='my-4'><p>Texto de relleno</p><a class='btn btn-primary btn-lg' href='Prueba.php' role='button'>Crack!</a></div>";
                }
            } else {
                die("<div class='jumbotron'><h1 class='display-4'>ERROR!</h1><p class='lead'>La carpeta <strong>$nombre_carpeta_final</strong> ya existe. Indique otro nombre.</p><hr class='my-4'><p>Texto de relleno</p><a class='btn btn-primary btn-lg' href='Prueba.php' role='button'>Volver</a></div>");
            }
        } else {
            die("<div class='jumbotron'><h1 class='display-4'>ERROR!</h1><p class='lead'>No se ingresaron datos. Por favor indique un nombre para la carpeta.</p><hr class='my-4'><p>Texto de relleno</p><a class='btn btn-primary btn-lg' href='Prueba.php' role='button'>Volver</a></div>");
        }
        
        include 'script.php';
        ?>

    </body>
</html>
