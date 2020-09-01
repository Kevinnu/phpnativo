<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Politica</title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php
        include 'navbar.php';
        echo"<div class='container col-lg-9 col-sm-12'>";
        include 'aside.php';
        $min = "MIN";
        $max = "MAX";
        $Array = array('imagenes', 'negro', 'argentina', 'autos', 'politica');
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
                foreach ($Array as $valor) {
                    $random = rand(tomar_valores($min, $valor), tomar_valores($max, $valor));
                    $query = "SELECT * FROM `$valor` WHERE id = $random ";
                    $consulta = mysqli_query($conection, $query);
                    while ($datos = mysqli_fetch_assoc($consulta)) {
                        echo "<div class='container col-sm-12 col-md-6 col-lg-6 img-thumbnail'><div class='col-md-12'><strong style='font-size:20px;'>" . $datos['titulo'] . "</strong> $valor<a href=" . $datos['imagen'] . "><img class='col-md-12' src=" . $datos['imagen'] . " alt=" . $datos['imagen'] . "/></a><div class='text-center'><div style='margin-top:10px; padding:5px; margin:1px;'><button type='button' class='btn btn-whatsapp col-md-2 col-sm-1'>Wp</button><button type='button' class='btn btn-twitter col-md-2 col-sm-1'>Tw</button><button type='button' class='btn btn-facebook col-md-2 col-sm-1'>Fb</button><button type='button' class='btn btn-googleplus col-md-2 col-sm-1'>G+</button></div></div></div></div><br>";
                    }
                }
                mysqli_close($conection);
                echo"</div>";
            }
        }

        function tomar_valores($valor, $tabla) {
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

        include 'script.php';
        ?>
    </body>
</html>
