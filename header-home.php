<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Fotografías, videos y audios de aves y naturaleza en Chile, portafolio de Rodrigo González Lillo. No es un registro exhaustivo, pero está hecho con cariño.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<?php wp_head();?>

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" /> 

</head>
<body <?php body_class();?>>

    <header class="container-fluid">
        <div class="row row-header justify-content-center align-items-center ">
            <div class="col-3 col-md-4 col-lg-5" >
                <img id="logo" class="img-fluid float-right" src="<?php bloginfo("template_url"); ?>/img/CHINCOL-150x150-redondo-borde.png" alt="Logo ChincoLillo" >
            </div>
            <div class="col-9 col-md-8 col-lg-7" id="titulos">
                <h1 class="h1-header display-3">ChincoLillo</h1>
                <h2 class="h2-header d-none d-sm-block">Fotografías y Videos de Aves</h2>
                <h3 class="h3-header d-none d-md-block"><em>Portafolio de Rodrigo González Lillo</em></h3>
            </div>
        
        </div><!--/row-header-->
    </header>
