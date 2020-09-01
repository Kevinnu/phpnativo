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
    </head>
    <body>
        <br>
        <div class="float-left col-md-3 text-center" style="margin-left: 5px">
            <div style="background-image:url(img/fondo5.jpg); background-size: cover;">
                <aside>
                    <a href="index.php"><button type="button" class="btn btn-dark col-12 my-1">General</button></a>
                    <a href="negro.php"><button type="button" class="btn btn-dark col-12 my-1">Negro</button></a>
                    <a href="random.php"><button type="button" class="btn btn-dark col-12 my-1">Random</button></a>
                    <a href="autos.php"><button type="button" class="btn btn-dark col-12 my-1">Autos</button></a>
                    <a href="Argentina.php"><button type="button" class="btn btn-dark col-12 my-1">Argentina</button></a>
                    <a href="politica.php"><button type="button" class="btn btn-dark col-12 my-1">Politica</button></a>
                    <a href="video.php"><button type="button" class="btn btn-dark col-12 my-1">Videos</button></a>
                    <a href="gif.php"><button type="button" class="btn btn-dark col-12 my-1">GIF</button></a>
                </aside>
            </div>
        </div>
        <div class="float-right col-md-3">
            <div class="float-right col-md-12 text-center" style="margin-left: 5px">
            </div>
            <?php imprimir_imagen(); ?>
        </div>
        <?php

        function imprimir_imagen() {
            $min = "MIN";
            $max = "MAX";
            $Categorias = array('imagenes', 'negro', 'argentina', 'autos', 'politica','gif');
            $host = "localhost";
            $username = "root";
            $password = "";
            $db = "galeria";
            $port = "3308";
            $query_consult = "SELECT * FROM `imagenes`";
            $conection = mysqli_connect($host, $username, $password, $db, $port);
            $consulta = mysqli_query($conection, $query_consult);
           
            
            if (mysqli_connect_errno($conection)) {
                echo "ERROR " . mysqli_connect_errno();
            } else {
                if (!$consulta) {
                    echo "Error " . mysqli_connect_errno();
                } else {
                    echo "<div class='float-right col-md-12 text-center' style='margin-left: 5px'>
                <div style='background-image: url(img/fondo_aside.jpg); background-size: cover;'>
                    <aside><h3>LO MEJOR DE LA SEMANA</h3>";
                    foreach ($Categorias as $categoria) {
                        
                        //Se genera un numero al azar en base a la cantidad de datos
                        $random = rand(tomar_valores_1($min, $categoria), tomar_valores_1($max, $categoria));
                        $query = "SELECT * FROM `$categoria` WHERE id = $random ";
                        $consulta = mysqli_query($conection, $query);
                        while ($datos = mysqli_fetch_assoc($consulta)) {
                            echo "<div class='img-thumbnail my-2'><strong style='font-size:20px;'></strong><a href=" . $datos['imagen'] . "><img class='col-md-12' src=" . $datos['imagen'] . " alt=" . $datos['imagen'] . "/></a></div>";
                        }
                    }echo "</aside></div></div>";
                    mysqli_close($conection);
                }
            }
        }
        
        //Se toma un valor id de la tabla cargada

        function tomar_valores_1($valor, $tabla) {
            $host = "localhost";
            $username = "root";
            $password = "";
            $db = "galeria";
            $port = "3308";
            $conection = mysqli_connect($host, $username, $password, $db, $port);
            $new_query = "SELECT $valor(id) FROM `$tabla`";
            $new_consulta = mysqli_query($conection, $new_query);
            $ids = "";
            if ($row = mysqli_fetch_row($new_consulta)) {
                $id = trim($row[0]);
                return $id;
            }
        }
        ?>
    </body>
</html>
