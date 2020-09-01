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
    </head>
    <body>
        <!-- Inicio Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navegador">
            <a href="#" onclick="openNav()">
                <span class="navbar-toggler-icon"></span>
            </a>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio<span class="sr-only">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Galeria</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opciones
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbardropdown">
                            <a class="dropdown-item" href="registrousuarios.php">Registrar Usuarios</a>
                            <a class="dropdown-item" href="consultabasededatos.php">Buscar en base de datos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="cargarmeme.php">Subir meme</a>
                            <a class="dropdown-item" href="subir_video.php">Subir video</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Temas    
                        </a>
                        <div class="dropdown-menu">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                    <input type="radio" onclick="cambiarnegro()" name="options" id="option1" checked>Dark
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" onclick="cambiarazul()" name="options" id="option2">Azul
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" onclick="cambiarblanco()" name="options" id="option3">Blanco
                                </label>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Administrador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginusers.php">Iniciar sesion</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Navbar lateral -->

        <div id="mySidenav" class="sidenav2">
            <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Nosotros</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
            <a href="#">Ayuda</a>
        </div>


        <!-- Use any element to open the sidenav -->
        <!--   <button class="btn btn-primary" onclick="openNav()">open</button> -->

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">
        </div>
    </body>
</html>
