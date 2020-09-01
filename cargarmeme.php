<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir meme</title>
        <?php include 'headlink.php'; ?>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="img-thumbnail col-md-5" style="margin-top: 10%; margin-left: 23%;">
            <div class="container text-center">
                <h2>Subir viñeta</h2>
            </div>
            <div class="container col-md-12">
                <form action="UploadSQL.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titulo">Indique titulo de la viñeta</label>
                        <input type="text" name="titulo" maxlength="100" class="form-control" placeholder="Ingrese titulo" required="">
                    </div>
                    <div class="form-group">
                        <label>Seleccione categoria</label>
                        <select name="categoria" class="form-control">
                            <option selected="">General</option>
                            <option>Negro</option>
                            <option>Autos</option>
                            <option>Memes</option>
                            <option>Politica</option>
                            <option>Argentina</option>
                            <option>Gif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Puede subir una o varias viñetas</label>
                        <input type="file" name="imagen[]" class="form-control-file" multiple="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Subir</button>
                    <a href="index.php" class="btn btn-primary">Volver al inicio</a>
                </form>
            </div>
        </div>
        <?php include 'script.php'; ?>
    </body>
</html>
