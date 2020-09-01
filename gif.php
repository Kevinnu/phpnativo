<html>
    <head>
        <meta charset="UTF-8">
        <title>GIF</title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php
        include 'navbar.php';
        echo"<div class='container col-lg-9 col-md-12'>";
        include 'aside.php';
        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "galeria";
        $port = "3308";
        $query_consult = "SELECT * FROM `gif` ORDER BY `gif`.`id` DESC";
        $conection = mysqli_connect($host, $username, $password, $db, $port);
        $consulta = mysqli_query($conection, $query_consult);

        if (mysqli_connect_errno($conection)) {
            echo "ERROR " . mysqli_connect_errno();
        } else {
            if (!$consulta) {
                echo "Error " . mysqli_connect_errno();
            } else {
                while ($datos = mysqli_fetch_assoc($consulta)) {
                    echo "<div class='container col-sm-12 col-md-6 col-lg-6 img-thumbnail'><div class='col-md-12 text-center'><strong style='font-size:20px;'>" . $datos['titulo'] . "</strong><a href=" . $datos['imagen'] . "><img class='col-md-12' src=" . $datos['imagen'] . " alt=" . $datos['imagen'] . "/></a><div class='text-center'><div style='margin-top:10px; padding:5px; margin:1px;'><button type='button' class='btn btn-whatsapp col-md-2 col-sm-1'>Wp</button><button type='button' class='btn btn-twitter col-md-2 col-sm-1'>Tw</button><button type='button' class='btn btn-facebook col-md-2 col-sm-1'>Fb</button><button type='button' class='btn btn-googleplus col-md-2 col-sm-1'>G+</button></div></div></div></div><br>";
                }
                mysqli_close($conection);
                echo"</div>";
            }
        }
        include 'script.php';
        ?>
    </body>
</html>