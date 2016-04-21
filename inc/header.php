<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!-- If you delete this meta tag World War Z will become a reality-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- This meta tags improve SEO-->
    <meta name="description" content="This is an awesome SEO description for lorem ipsum ari gato">
    <meta name="author" content="Jaime Madrigal Rios">
    <title><?php echo $pageTitle; ?></title>
    <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like-->
    <!-- <link rel="stylesheet" href="css/normalize.css">-->
    <link rel="icon" type="image/png" href="http://riosjaime.com/favicon.ico">

    <!--link(rel='stylesheet', href='css/animate.min.css')-->
    <!-- My styles-->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Here goes the php if statement-->
    <!-- Here ends the php if-->
</head>
<body>

<?php
$theTitle

?>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="#">Hidrobiotecnología</a>
-->        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class=" <?php if ($section == 'home') { echo 'active';} ;?>"><a href="index.php"><i class="material-icons">home</i></a></li>
                <li class=" <?php if ($section == 'contacto') { echo 'active'; } ;?>"><a href="contacto.php">Contacto</a></li>
                <li class=" <?php if ($section == 'galeria') { echo 'active'; } ;?>"><a href="galeria.php">Galería</a></li>
                <li class=" <?php if ($section == 'nosotros') { echo 'active';} ;?>"><a href="nosotros.php">Nosotros</a></li>
                <li class=" <?php if ($section == 'productos') { echo 'active'; } ;?>"><a href="productos.php">Productos</a></li>
                <li class=" <?php if ($section == 'servicios') { echo 'active'; } ;?>"><a href="servicios.php">Servicios</a></li>
                <li class=" <?php if ($section == 'sistemas') { echo 'active'; } ;?>"><a href="sistemas.php">Sistemas</a></li>
                <!--<li><a href="#"><i class="material-icons">face</i></a></li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav> <!-- Ends nav-->


<div class="container-fluid">
