<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload</title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>



        <?php
        include 'navbar.php';

        $db = mysqli_connect("localhost", "root", "", "galeria", "3308");
        $query = "SELECT * FROM `imagenes`";
        $contador = count($_FILES['imagen']['name']);
     //   $contador_1 = "$contador";
        $comparar = 19;
        $File_type = $_FILES['imagen']['type'];

        if (empty($_FILES['imagen'])) {
            echo "No hay Archivo";
        } else {
            if (!(in_array("image/jpg", $File_type) || in_array("image/jpeg", $File_type) || in_array("image/png", $File_type) || in_array("image/gif", $File_type))) {
                echo"<div class='jumbotron'><h1 class='display-4'>ERROR!</h1><p class='lead'>El formato de archivo no es compatible</p>
          <hr class='my-4'>
          <p>Has click en el boton volver para continuar viendo memes. Sino has click en '<strong>Subir nuevo</strong>' para cargar uno nuevo</p>
          <p class='lead'>
          <a class='btn btn-primary btn-lg' href='index.php' role='button'>Ir al inicio</a>
          <a class='btn btn-primary btn-lg' href='cargarmeme.php'>Subir nuevo</a>
          </p>
          </div>";
            } else {
                //Se limita la cantidad de imagenes que se pueden subir
                if ($contador > $comparar) {
                    echo"<div class='jumbotron'><h1 class='display-4'>ERROR!</h1><p class='lead'>No se pueden subir mas de 19 memes a la vez</p>
          <hr class='my-4'>
          <p>Has click en el boton volver para continuar viendo memes. Sino has click en '<strong>Subir nuevo</strong>' para cargar uno nuevo</p>
          <p class='lead'>
          <a class='btn btn-primary btn-lg' href='index.php' role='button'>Ir al inicio</a>
          <a class='btn btn-primary btn-lg' href='cargarmeme.php'>Subir nuevo</a>
          </p>
          </div>";
                } else {
                    if (mysqli_connect_errno($db)) {
                        echo "Error " . mysqli_connect_errno();
                    } else {
                        if (!mysqli_query($db, $query)) {
                            echo "ERROR " . mysqli_error($db);
                        } else {
                            for ($i = 0; $i < $contador; $i++) {
                                $titulo_generico = $_POST['titulo'];
                                $categoria = $_POST['categoria'];
                                if ($categoria === "General") {
                                    $categoria = "imagenes";
                                }
                                $destino = $_FILES['imagen']['name'][$i];
                                $replace = preg_replace('/ /', '_', $destino);
                                $temporal = $_FILES['imagen']['tmp_name'][$i];
                                copy($temporal, $replace);
                                $db = mysqli_connect("localhost", "root", "", "galeria", "3308");
                                $query = "INSERT INTO `$categoria`(`id`, `titulo`, `imagen`) VALUES (DEFAULT, '$titulo_generico','$replace')";
                                mysqli_query($db, $query);
                            }
                            echo"<div class='jumbotron'>
          <h1 class='display-4'>Exito!</h1>
          <p class='lead'>El meme ha sido cargado exitosamente</p>
          <hr class='my-4'>
          <p>Has click en el boton volver para continuar viendo memes. Sino has click en '<strong>Subir nuevo</strong>' para cargar uno nuevo</p>
          <p class='lead'>
          <a class='btn btn-primary btn-lg' href='index.php' role='button'>Ir al inicio</a>
          <a class='btn btn-primary btn-lg' href='cargarmeme.php'>Subir nuevo</a>
          </p>
          </div>";
                        }
                    }
                    mysqli_close($db);
                }
            }
        }






        /*  copy($_FILES['imagen']['tmp_name'], $_FILES['imagen']['name']);
          $imagen = $_FILES['imagen']['name'];
          $titulo = $_POST ['titulo'];
          $imagen_contenido = file_get_contents($imagen);
          $db = mysqli_connect("localhost", "root", "", "galeria", "3308");

          // $titulo_final = ucfirst($titulo);

          $query = "INSERT INTO `imagenes`(`id`, `titulo`, `imagen`) VALUES (DEFAULT, '$titulo','$imagen')";

          if (mysqli_connect_errno($db)) {
          echo "Error " . mysqli_connect_errno();
          } else {
          if (!mysqli_query($db, $query)) {
          echo "ERROR " . mysqli_error($db);
          } else {
          echo"<div class='jumbotron'>
          <h1 class='display-4'>Exito!</h1>
          <p class='lead'>El meme ha sido cargado exitosamente</p>
          <hr class='my-4'>
          <p>Has click en el boton volver para continuar viendo memes. Sino has click en '<strong>Subir nuevo</strong>' para cargar uno nuevo</p>
          <p class='lead'>
          <a class='btn btn-primary btn-lg' href='index.php' role='button'>Ir al inicio</a>
          <a class='btn btn-primary btn-lg' href='cargarmeme.php'>Subir nuevo</a>
          </p>
          </div>";
          mysqli_close($db);
          }
          } */

        include 'script.php';
        ?>

    </body>
</html>
