<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kevin</title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>

        <?php
        include 'navbar.php';
        
        ?>
        <div class="container col-lg-9 col-sm-12">
        <?php
        include 'aside.php';
        // Se cargan las imagenes desde la base de datos
        include 'imagenessql.php';
        ?>
        </div>

        <?php


//Esta funcion no es utilizada
   /*     function cargar_imagen() {
            $carpeta = 'img';
            $formato = 'jpg';
            $leer_carpeta = dir($carpeta);
            while (($archivo = $leer_carpeta->read()) !== false) {
                if (similar_text($formato, $archivo)) {
                    echo "<div class='container col-md-5 img-thumbnail' style='margin-top: 10px;'>
                            <div class='col-md-12'>
                                <h2>Titulo de la foto</h2>
                                <br>
                                <div class='container''>
                                    <a href='$carpeta/$archivo'>
                                        <img class='col-md-12' src='$carpeta/$archivo' alt='$archivo'/>
                                    </a>
                                </div>
                                <div class='text-center'>
                                    <div style='margin-top: 10px; padding: 10px;'>
                                       <button type='button' class='btn btn-whatsapp col-md-1 col-sm-5'>Wp</button>
                                        <button type='button' class='btn btn-twitter col-md-1 col-sm-5'>Tw</button>
                                        <button type='button' class='btn btn-facebook col-md-1 col-sm-5'>Fb</button>
                                         <button type='button' class='btn btn-googleplus col-md-1 col-sm-5'>G+</button>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
            }

            $leer_carpeta->close();
        }
        
        include 'script.php';*/
        ?>

       
    </body>
</html>
