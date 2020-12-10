<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Fotografías, videos y audios de aves y naturaleza en Chile, portafolio de Rodrigo González Lillo. No es un registro exhaustivo, pero está hecho con cariño.">
    <link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/img/favicon16.png" sizes="16x16">

<?php wp_head();?>

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" /> 

</head>
<body <?php body_class();?>>

    <header class="container-fluid">
        <div id="header-sup" class="row row-header justify-content-center align-items-center">
                <img id="logo" class="img-fluid float-right" src="<?php bloginfo("template_url"); ?>/img/CHINCOL-150x150-redondo-borde.png" alt="Logo ChincoLillo" >
                <h1 class="h1-header">ChincoLillo</h1>
                <h2 class="h2-header d-none d-sm-inline-block">Fotografías y Videos de Aves</h2>
                <h3 class="h3-header d-none d-lg-inline-block"><em>-Portafolio de Rodrigo González Lillo-</em></h3>
            
        </div><!--/header-sup-->
        <nav id="nav-header" class="row navbar navbar-dark navbar-expand-md d-block">
            <div class="container">
                <button id="boton-menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    Menú <span class="navbar-toggler-icon"></span>
                </button>
                <div id="Navbar" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto ml-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php bloginfo("template_url"); ?>/aves-de-chile"><i class="fas fa-crow">&nbsp;</i>Aves de Chile</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php bloginfo("template_url"); ?>/chincolillo"><i class="fas fa-glasses">&nbsp;</i>ChincoLillo</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php bloginfo("template_url"); ?>/contacto"><i class="fas fa-feather-alt">&nbsp;</i>Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
