<?php get_header('home'); ?>
<main>
<div class="container-fluid">
    <div class="car-txt-home row row-content justify-content-center float-none">
        <div id="car01" class="col-12 col-xl-9 mx-auto offset-md-auto">
            <div id="mycarousel01" class="car-home carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <figure>
                        <picture>
                            <source media="(min-width:850px)" srcset="<?php bloginfo("template_url"); ?>/img/Chincol_2015-07-15_11-1200px.jpg">
                            <img src="<?php bloginfo("template_url"); ?>/img/Chincol_2015-07-15_11-800px.jpg"
                                alt="Chincol" class="img-fluid" />
                        </picture>
                        </figure>
                    </div><!--/carousel-item -->
                    <div class="carousel-item">
                        <figure>
                        <picture>
                            <source media="(min-width:850px)" srcset="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen--1200px.jpg">
                            <img src="<?php bloginfo("template_url"); ?>/img/FioFio-2013-12-23-Penalolen-800px.jpg"
                                alt="Fio-fío" class="img-fluid" />
                        </picture>
                        </figure>
                    </div><!--/carousel-item -->
                    <div class="carousel-item">
                        <figure>
                        <picture>
                            <source media="(min-width:850px)" srcset="<?php bloginfo("template_url"); ?>/img/Jilguero-2013-06-18-Penalolen-1200px.jpg">
                            <img src="<?php bloginfo("template_url"); ?>/img/Jilguero-2013-06-18-Penalolen-800px.jpg"
                                alt="Jilguero" class="img-fluid" />
                        </picture>
                        </figure>
                    </div><!--/carousel-item -->
                    <div class="carousel-item">
                        <figure>
                        <picture>
                            <source media="(min-width:850px)" srcset="<?php bloginfo("template_url"); ?>/img/Picaflor-Chico-2014-04-18-Penalolen-1200px.jpg">
                            <img src="<?php bloginfo("template_url"); ?>/img/Picaflor-Chico-2014-04-18-Penalolen-800px.jpg"
                                alt="Picaflor chico" class="img-fluid" />
                        </picture>
                        </figure> 
                    </div><!--/carousel-item -->
                    <button class="btn btn-sm" id="carouselButton">
                        <span class="fas fa-pause fa-sm"></span>
                        <span class="sr-only">Play/Pause</span>
                    </button>
                    <a class="carousel-control-prev" href="#mycarousel01" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel01" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>

                </div><!--/carousel-inner -->
                <ol class="carousel-indicators">
                            <li data-target="#mycarousel01" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel01" data-slide-to="1"></li>
                            <li data-target="#mycarousel01" data-slide-to="2"></li>
                            <li data-target="#mycarousel01" data-slide-to="3"></li>
                </ol>

            </div><!--/mycarousel01 -->
        </div><!--/car01 -->
        <div id="txt01" class="txt-home col-12 col-xl-3 mx-auto offset-md-auto">
            <p class="p-home">Bienvenid@ al portafolio con mis fotografías y videos de aves de Chile.
                <br><br>No esperes un registro exhaustivo, aquí hay varios años de una afición que he
                realizado de forma esporádica, principalmente cerca de mi hogar en Santiago de Chile.
                <br><br>¡Te invito a <a class="p-link" href="<?php bloginfo("template_url"); ?>/aves-de-chile">visitar las galerías</a>! Las hice
                con mucho cariño por la naturaleza.<br><br><em>ChincoLillo</em>
            </p>
        </div>
    </div><!--/row row-content -->

</div> <!--/container -->
</main>
<?php get_footer(); ?>