<?php

show_admin_bar(false);      // eliminar barra de admin

//Agrega soporte para Thumbnails
add_theme_support('post-thumbnails');
add_image_size("chica", 200, 200, true);     //parametros: nombre , ancho, alto, true=redimensiona sin true=corta
add_image_size("banner", 940, 300, true);

//Agrego soporte para Menu
register_nav_menus(array(
	'primary' => __('Menu principal', 'menu')   //Menu principal = aparece en el panel , menu = id pa programacion
));

//Agrego soporte para los Widgets
register_sidebar(array(
	'name' => 'sidebar',    //nombre del espacio del widget
	'before_widget' => '<div class="box">',   //antes del widget
	'after_widget' => '</div>',  //despues del widget
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

// Removes some links from the header
function my_theme_remove_headlinks() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'start_post_rel_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'parent_post_rel_link' );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'my_theme_remove_headlinks' );


// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', 
  					array(), 
  					'4.5.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

function replace_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', false, '3.5.1', true);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'replace_jquery');

function add_id_to_script( $tag, $handle, $source ) {
    if ( 'jquery' === $handle ) {
        $tag = '<script src="' . $source . '" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>';
    }

    if ( 'bootstrap_bundle_js' === $handle ) {
        $tag = '<script src="' . $source . '" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>';
    }

    return $tag;
}

add_filter( 'script_loader_tag', 'add_id_to_script', 10, 3 );

// Incluir Bootstrap JS 
function bootstrap_bundle_js() {

	wp_enqueue_script( 'bootstrap_bundle_js', 
  					'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', 
  					array('jquery'), 
  					'4.5.3', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_bundle_js');

add_filter( 'script_loader_tag', 'add_id_to_script', 10, 3 );

// Excluir wp-embed.js del footer
function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );



?>
