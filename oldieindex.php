<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/sharecolors.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="inicio">
            <h1>INICO PRUEBA</h1>
        </div>

        <a href="#inicio">Arriba</a>

        
        <div class="container col-md-9">
                <?php include 'imagenessql.php'; ?>
        </div>   
        

        <div class="container col-md-5">
            <form action="creardirectorio.php" method="POST">
                <div class="form-group">
                    <label>Titulo</label>
                    <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Ingrese Nombre de la carpeta" required>
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>
        <br>
        <div class="container col-md-5">
            <form action="UploadSQL.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Indique titulo de la viñeta</label>
                    <input type="text" name="titulo" maxlength="100" class="form-control" placeholder="Ingrese titulo" required="">
                </div>
                <div class="form-group">
                    <input type="file" name="imagen" class="form-control-file" multiple="" required>
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>

        <div class="container col-md-6">
            <?php
            $directorio = "img/";
            $mostrar_array = scandir($directorio);

            foreach (array_diff($mostrar_array, array('.', '..')) as $valor) {
                echo "<div class='container col-md-6'><a href='img/$valor'>$valor</a></div>";
            }
            ?>
        </div>


        <div class="container col-md-5">
            <div class="text-center">
                <h2>Registro de usuarios</h2>
            </div>
            <form action="formulariousuarios.php" method="POST">
                <div class="form-group">
                    <label>Usuario: </label>
                    <input name="usuario" type="text" class="form-control" placeholder="Indique usuario" required>
                </div>
                <div class="form-group">
                    <label>Contraseña: </label>
                    <input name="password" type="password" class="form-control" placeholder="Indique contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>

        <div class="container col-md-5">
            <div class="text-center"><h2>Consulta de usuarios</h2></div>
            <form action="consultausuarios.php" method="POST">
                <div class="form-group">
                    <label>Usuario: </label>
                    <input name="usuario" type="text" class="form-control" placeholder="Indique usuario que desea encontrar" required>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
        
        <div class="container col-md-5">
            <div class="text-center">
                <h2>Log in usuarios</h2>
            </div>
            <form action="comprobacionusuarios.php" method="POST">
                <div class="form-group">
                    <label>Usuario: </label>
                    <input name="usuario" type="text" class="form-control" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <label>Contraseña: </label>
                    <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>


        
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
    </body>
</html>
