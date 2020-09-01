<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta base</title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php
        $usuario_consulta = $_POST['usuario'];
        $password_consulta = $_POST['password'];
        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "usuarios";
        $port = "3308";
        $usuario_consulta_uppered = mb_strtoupper($usuario_consulta);
        $query_consult = "SELECT * FROM `usuarios` WHERE usuario = '$usuario_consulta_uppered'";
        $conection = mysqli_connect($host, $username, $password, $db, $port);
        $consulta = mysqli_query($conection, $query_consult);

        if (mysqli_connect_errno($conection)) {
            echo "ERROR " . mysqli_connect_errno();
        } else {
            if (!$consulta) {
                echo "Error " . mysqli_connect_errno();
            } else {
                while ($datos = mysqli_fetch_assoc($consulta)) {
                    $comparar = $datos['password'];
                    echo "La contraseña ingresada es: $password_consulta<br>";
                    if (password_verify($password_consulta, $comparar)) {
                        echo "La clave Coincide<br>";
                    } else {
                        echo "La clave no coincide<br>";
                    }
                }
            }
        }
        
        include 'script.php';
        ?>
    </body>
</html>
