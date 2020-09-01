<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
       <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php
        $username_input = $_POST['usuario'];
        $password_input = $_POST['password'];
        $username_input_uppered = mb_strtoupper($username_input);
        $hash = password_hash($password_input, PASSWORD_DEFAULT);

        include 'navbar.php';

        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "usuarios";
        $port = "3308";
        $query = "INSERT INTO `usuarios`(`id`, `usuario`, `password`) VALUES (DEFAULT,'$username_input_uppered','$hash')";
        $query_consult = "SELECT `usuario` FROM `usuarios` WHERE usuario = '$username_input_uppered'";
        $conection = mysqli_connect($host, $username, $password, $db, $port);
        $comprobacion = mysqli_query($conection, $query_consult);

        if (mysqli_connect_errno($conection)) {
            echo "ERROR! " . mysqli_connect_errno();
        } else {
            if (mysqli_num_rows($comprobacion,) > 0) {
                echo "<div class='jumbotron'><h1 class='display-4'>ERROR!</h1><p class='lead'>El nombre de usuario ya existe.</p><hr class='my-4'><p>Texto de relleno</p><a class='btn btn-primary btn-lg' href='index.php' role='button'>Continuar</a></div>";
            } else {
                if (mysqli_query($conection, $query)) {
                    echo "<div class='jumbotron'><h1 class='display-4'>EXITO!</h1><p class='lead'>El usuario fue registrado exitosamente</p><hr class='my-4'><p>Texto de relleno</p><a class='btn btn-primary btn-lg' href='index.php' role='button'>Continuar</a></div>";
                } else {
                    echo "<div class='jumbotron'><h1 class='display-4'>ERROR!</h1><p class='lead'>No se pudo completar la accion.</p><hr class='my-4'><p>Texto de relleno</p><a class='btn btn-primary btn-lg' href='index.php' role='button'>Continuar</a></div>" . mysqli_error($conection);
                }
            }
        }
        include 'script.php';
        ?>
    </body>
</html>
