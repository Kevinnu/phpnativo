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
        include 'navbar.php';
        echo"<div class='container col-lg-6 col-md-12'>";
        include 'aside.php';
        galery();
        echo"</div>";

        function galery() {
            $Array = array('imagenes', 'negro', 'argentina', 'autos', 'politica', 'gif');
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
                    echo "<div class='container col-lg-12 col-md-6 col-sm-12'>";
                    foreach ($Array as $valor) {
                        $query = "SELECT * FROM `$valor`";
                        $consulta = mysqli_query($conection, $query);
                        while ($datos = mysqli_fetch_assoc($consulta)) {
                            echo "<div class='container text-center float-left col-sm-12 col-md-12 col-lg-3 img-thumbnail' style='margin:1px;'><div class=''><a href=" . $datos['imagen'] . "><img class='col-md-12' style='max-width:600px; height:200px;' src=" . $datos['imagen'] . " alt=" . $datos['imagen'] . "/></a></div></div>";
                        }
                    }
                    echo "</div>";
                    mysqli_close($conection);
                }
            }
        }

        include 'script.php';
        ?>
    </body>
</html>
