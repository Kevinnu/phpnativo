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
        <?php include 'navbar.php'; ?>
        <!-- Busqueda de usuario --><br><br>
        <div class="card text-center container col-md-5">
            <div class="card-header"><h2>Consulta de usuarios</h2></div>
            <div class="card-body">
            <form action="consultausuarios.php" method="POST">
                <div class="form-group">
                    <label class="card-title">Usuario: </label>
                    <input name="usuario" type="text" class="form-control" placeholder="Indique usuario que desea encontrar" required>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button><br>
            </form>
            </div>
        </div>
        <br><br>
       
        
        <!-- Consulta cantidad de memes en la base de datos  FALTA ENLAZAR CON ARCHIVO (ARCHIVO PENDIENTE DE CREAR) -->
        <div class="container col-md-5 img-thumbnail">
            <div class="text-center"><h2>Consulta de memes</h2></div>
            <form action="consultausuarios.php" method="POST">
                <div class="form-group">
                    <label>Para saber cuantos memes hay subidos haga click en "<strong>Enviar</strong>" </label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

  <?php include 'script.php'; ?>
    </body>
</html>
