<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php
        $titulo = $_POST['titulo'];
        $video_name = $_FILES['video']['name'];
        $video_formato = $_FILES['video']['type'];
        $video_size = $_FILES['video']['size'];
        $contador = count($_FILES['video']['name']);
        $host = "localhost";
        $username = "root";
        $passwd = "";
        $dbname = "galeria";
        $port = "3308";
        $conect_base = mysqli_connect($host, $username, $passwd, $dbname, $port);

        
        if (in_array('', $video_size)|| in_array('', $video_name)) {
            echo"<div class='jumbotron'>
          <h1 class='display-4'>ERROR!</h1>
          <p class='lead'>El archivo esta vacio</p>
          <hr class='my-4'>
          <p>Has click en el boton volver para continuar viendo memes. Sino has click en '<strong>Subir nuevo</strong>' para cargar uno nuevo</p>
          <p class='lead'>
          <a class='btn btn-primary btn-lg' href='index.php' role='button'>Ir al inicio</a>
          <a class='btn btn-primary btn-lg' href='cargarmeme.php'>Subir nuevo</a>
          </p>
          </div>";
        } else {
            if (!in_array('video/mp4', $video_formato)) {
                echo"<div class='jumbotron'>
          <h1 class='display-4'>ERROR!</h1>
          <p class='lead'>El formato no es compatible</p>
          <hr class='my-4'>
          <p>Has click en el boton volver para continuar viendo memes. Sino has click en '<strong>Subir nuevo</strong>' para cargar uno nuevo</p>
          <p class='lead'>
          <a class='btn btn-primary btn-lg' href='index.php' role='button'>Ir al inicio</a>
          <a class='btn btn-primary btn-lg' href='cargarmeme.php'>Subir nuevo</a>
          </p>
          </div>";
            } else {
                if (mysqli_connect_errno($conect_base)) {
                    echo "todo mal" . mysqli_connect_errno();
                } else {
                    for ($i = 0; $i < $contador; $i++) {
                        $titulo;
                        $destino = $_FILES['video']['name'][$i];
                        $replace = preg_replace('/ /', '_', $destino);
                        $temporal = $_FILES['video']['tmp_name'][$i];
                        copy($temporal, $replace);
                        $query = "INSERT INTO `videos`(`id`, `titulo`, `video`) VALUES (DEFAULT, '$titulo', '$replace')";
                        mysqli_query($conect_base, $query);
                    } mysqli_close($conect_base);
                    echo"<div class='jumbotron'>
          <h1 class='display-4'>Exito!</h1>
          <p class='lead'>El video ha sido cargado exitosamente</p>
          <hr class='my-4'>
          <p>Has click en el boton volver para continuar viendo memes. Sino has click en '<strong>Subir nuevo</strong>' para cargar uno nuevo</p>
          <p class='lead'>
          <a class='btn btn-primary btn-lg' href='index.php' role='button'>Ir al inicio</a>
          <a class='btn btn-primary btn-lg' href='cargarmeme.php'>Subir nuevo</a>
          </p>
          </div>";
                }
            }
        }
        
        
        include 'script.php';
        ?>
    </body>
</html>
