<?php get_header(); ?>
<div class="container-fluid">
<nav class="nav-aves">
    <div class="row">
        <ol class="col-12 breadcrumb">
            <li class="breadcrumb-item"><a href="http://chincolillo.gonzalezlillo.cl">Home</a></li>
            <li class="breadcrumb-item active">Aves de Chile</li>
        </ol>
    </div>
</nav>
<main class="nav-aves">
    <div class="row">
        <h1 class="h1-main">Aves de Chile</h1>
    </div>
    <div class="row row-content align-items-center justify-content-center">
        <a href="<?php bloginfo("template_url"); ?>/aves-de-chile/chincol" class="card col-12 col-sm-5 col-md-3 col-lg-2" onmouseover="addVideo(this)" onmouseout="restoreImg(this)">
            <h2 class="card-header h2-card">Chincol</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/Chincol_2015-07-15_11-400px.jpg" alt="Chincol">
                <video class="video-card" preload="auto" muted loop>
                    <source src="<?php bloginfo("template_url"); ?>/video/chincol-400px.mp4" type="video/mp4">
                </video>
            </div>
            <div class="card-footer">
                Zonotrichia capensis chilensis<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a><!--/card-chincol -->
        <a href="<?php bloginfo("template_url"); ?>/aves-de-chile/tordo" class="card col-12 col-sm-5 col-md-3 col-lg-2" onmouseover="addVideo(this)" onmouseout="restoreImg(this)">
            <h2 class="card-header h2-card">Tordo</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/Tordo_21oct2017_06-400px.jpg" alt="Tordo">
                <video class="video-card" preload="auto" muted loop>
                    <source src="<?php bloginfo("template_url"); ?>/video/tordo-400px.mp4" type="video/mp4">
                </video>
            </div>
            <div class="card-footer">
                Curaeus curaeus<br>
                <span class="text-muted">Contenido: <i class="fas fa-video"></i> </span>
            </div>
        </a><!--/card-tordo -->
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2" onmouseover="addVideo(this)" onmouseout="restoreImg(this)">
            <h2 class="card-header h2-card">Tórtola <span class="badge badge-warning float-right">Coming soon!</span></h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/Tortola_07ago2014_072-400px.jpg" alt="Tórtola">
                <video class="video-card" preload="auto" muted loop>
                    <source src="<?php bloginfo("template_url"); ?>/video/tortola-400px.mp4" type="video/mp4">
                </video>
            </div>
            <div class="card-footer">
                Zenaida auriculata<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a><!--/card-tortola -->


        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
        <a href="#" class="card col-12 col-sm-5 col-md-3 col-lg-2">
            <h2 class="card-header h2-card">Some Bird</h2>
            <div class="card-body">
                <img class="img-card" src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-400px.jpg" alt="Another Bird">
            </div>
            <div class="card-footer">
                Scientific name<br>
                <span class="text-muted">Contenido: <i class="fas fa-camera"></i> <i class="fas fa-video"></i> <i class="fas fa-list-ul"></i></span>
            </div>
        </a>
    </div><!--/row01 -->
</main>
</div> <!--/container -->
<?php get_footer(); ?>