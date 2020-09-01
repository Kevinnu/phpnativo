    <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta</title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php
        include 'navbar.php';
        $variable_consulta = $_POST['usuario'];
        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "usuarios";
        $port = "3308";
        $usuario_consulta_uppered = mb_strtoupper($variable_consulta);
        $query_consult = "SELECT * FROM `usuarios` WHERE usuario='$usuario_consulta_uppered'";
        $query_total = "SELECT * FROM `usuarios`";
        $conection = mysqli_connect($host, $username, $password, $db, $port);
        $consulta = mysqli_query($conection, $query_consult);
        $consulta_total = mysqli_query($conection, $query_total);

        echo "<br><br>
            <div class='container col-md-6 col-sm-12'>
            <table class='table table-striped table-dark'>
            <thead class=''>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope='col'>Usuario</th>
                    <th scope='col'>Contraseña</th>
                </tr>
            </thead>
            <tbody>";

        if (mysqli_connect_errno($conection)) {
            echo "ERROR! " . mysqli_connect_errno();
        } else {
            if (!$consulta) {
                echo "ERROR " . mysqli_error($conection);
            } else {
                if (strcmp($variable_consulta, "*")) {
                    while ($datos = mysqli_fetch_assoc($consulta)) {
                        echo "<tr>
                    <th scope='row'>" . $datos['id'] . "</th>
                    <td>" . $datos['usuario'] . "</td>
                    <td>" . $datos['password'] . "</td>
                        </tr>";
                    }
                } else {
                    while ($datos = mysqli_fetch_assoc($consulta_total)) {
                        echo "<tr>
                    <th scope='row'>" . $datos['id'] . "</th>
                    <td>" . $datos['usuario'] . "</td>
                    <td>" . $datos['password'] . "</td>
                        </tr>";
                    }
                }
            }
        }

        echo "
            </tbody>
            </table>
            </div>
             ";
        ?>

        <div class="container col-md-6 col-sm-12"><a href="index.php" class="btn btn-primary">Continuar</a></div>

        <?php include 'script.php'; ?>
    </body>
</html>
