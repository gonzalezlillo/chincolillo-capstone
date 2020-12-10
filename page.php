<?php get_header(); ?>

<div class="container-fluid body-page">
    <div class="row">
        <ol class="col-12 breadcrumb">
            <li class="breadcrumb-item"><a href="http://chincolillo.gonzalezlillo.cl">Home</a></li>
            <?php if ( is_page() && $post->post_parent == '48' ) : ?>
                <li class="breadcrumb-item"><a href="<?php bloginfo("template_url"); ?>/aves-de-chile">Aves de Chile</a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active"><?php echo(get_the_title()); ?></li>
        </ol>
    </div>
<main>
    <div class="row">
        <h1 class="h1-main"><?php echo(get_post_meta(get_the_ID(), 'h1', TRUE)); ?></h1>
    </div>
    <?php if(have_posts()):?>  
        <?php while(have_posts()): the_post();?>
        <?php the_content(); ?>  
        <?php endwhile;?>
    <?php endif;?>
    <?php if ( is_page('chincol') && $post->post_parent == '48' ) : ?>
        <div class="car-txt-home row row-content justify-content-center float-none">
        <div id="car01" class="col-12 col-xl-9 mx-auto offset-md-auto">
            <div id="mycarousel01" class="car-home carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <figure>
                        <picture>
                            <source media="(min-width:850px)" srcset="<?php bloginfo("template_url"); ?>/img/Chincol_11dic2012_011-1200px.jpg">
                            <img src="<?php bloginfo("template_url"); ?>/img/Chincol_11dic2012_011-800px.jpg"
                                alt="Fio-fío" class="img-fluid" />
                        </picture>
                        </figure>
                    </div><!--/carousel-item -->
                    <div class="carousel-item">
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
                            <source media="(min-width:850px)" srcset="<?php bloginfo("template_url"); ?>/img/Chincol-alimentando-pollo_14oct2019_07-1200px.jpg">
                            <img src="<?php bloginfo("template_url"); ?>/img/Chincol-alimentando-pollo_14oct2019_07-800px.jpg"
                                alt="Jilguero" class="img-fluid" />
                        </picture>
                        </figure>
                    </div><!--/carousel-item -->
                    <button class="btn btn-sm" id="carouselButton">
                        <span class="sr-only">Play/Pause</span>
                        <span class="fas fa-pause fa-sm"></span>
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
                </ol>

            </div><!--/mycarousel01 -->
        </div><!--/car01 -->
        <div id="info-bird" class="col-12 col-xl-3 mx-auto offset-md-auto">
        <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Nombre común</th>
                                <td>Chincol</td>
                            </tr>
                            <tr>
                                <th>Nombre científico</th>
                                <td>Zonotrichia capensis</td>
                            </tr>
                            <tr>
                                <th>Nombre en inglés</th>
                                <td>Rufous-collared sparrow</td>
                            </tr>
                            <tr>
                                <th>Subespecies en Chile</th>
                                <td>Chilensis, Antofagastae, Peruviensis, Sanborni, Australis</td>
                            </tr>
                            <tr>
                                <th>Distribución en Chile</th>
                                <td>Entre Atacama y las Islas Guaitecas</td>
                            </tr>
                            <tr>
                                <th>Observaciones</th>
                                <td>Dentro de la cultura popular chilena se dice que su canto vocaliza la pregunta: "¿Has visto a mi tío Agustín?"</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div><!--/row row-content -->
    <?php endif; ?>


</main>
</div><!--/container-fluid-->
<?php get_footer(); ?>