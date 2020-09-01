<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro usuarios</title
        <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="card text-center container col-md-5" style="margin-top: 30px;">
            <div class="card-header">
                <h2>Registro de usuarios</h2>
            </div>
            <div class="card-body">
                <form action="formulariousuarios.php" method="POST">
                    <div class="form-group">
                        <label class="card-title">Usuario: </label>
                        <input name="usuario" type="text" class="form-control" placeholder="Indique usuario" required>
                    </div>
                    <div class="form-group">
                        <label class="card-title">Contraseña: </label>
                        <input name="password" type="password" class="form-control" placeholder="Indique contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
        <?php include 'script.php'; ?>
    </body>
</html>
