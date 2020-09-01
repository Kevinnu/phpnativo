<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log usuarios</title>
       <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div style="margin-top: 10%;" class="container col-sm-10 col-md-4">
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
      <?php include 'script.php'; ?>
    </body>
</html>
