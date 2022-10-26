<?php 
$cssFilePath = get_template_directory_uri() . '/css';
// Connects Style Sheet to Index File

// function enqueue_main_style_css() {
//    wp_enqueue_style( 'style.css', get_stylesheet_uri() ); 
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_main_style_css' );

/**
 * Enqueue front-end styles.
 */
function my_theme_styles() {
    $cssFilePath = get_template_directory_uri() . '/css';
    wp_enqueue_style('resetX', $cssFilePath . '/meyer-reset.css');
    wp_enqueue_style('setup', $cssFilePath . '/setup.css' );
    wp_enqueue_style('settings', $cssFilePath . '/settings.css' );
    wp_enqueue_style('structure', $cssFilePath . '/structure.css' );
    wp_enqueue_style('typography', $cssFilePath . '/typography.css' );
    wp_enqueue_style('blog-card', $cssFilePath . '/blog-card.css' );
    wp_enqueue_style('header', $cssFilePath . '/header.css' );

    // Enqueue the same style sheet in the front-end.
    wp_enqueue_style( 'main_styles', get_stylesheet_uri() );
        
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );


function enqueue_editor_style_css() {
   $cssFilePath = get_template_directory_uri() . '/css';
    wp_enqueue_style('resetX', $cssFilePath . '/meyer-reset.css');
    wp_enqueue_style('setup', $cssFilePath . '/setup.css' );
    wp_enqueue_style('settings', $cssFilePath . '/settings.css' );
    wp_enqueue_style('structure', $cssFilePath . '/structure.css' );
    wp_enqueue_style('typography', $cssFilePath . '/typography.css' );
    wp_enqueue_style('blog-card', $cssFilePath . '/blog-card.css' );
    wp_enqueue_style('header', $cssFilePath . '/header.css' );
    wp_enqueue_style('main_styles', get_stylesheet_uri() );
}
add_action( 'enqueue_block_editor_assets', 'enqueue_editor_style_css' );




//Add blog-header block
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/blog-header' );
}
add_action( 'init', 'register_acf_blocks' );













// Removes Admin Bar from Live Site Page
add_filter( 'show_admin_bar', '__return_false' );


//Add Menu Bar
function register_my_menu() {
  register_nav_menu('site-menu',__( 'Site Menu' ));
}
add_action( 'init', 'register_my_menu' );

//A way to get file paths easier 
function getFile($path) {
  return dirname(__FILE__) . '/' . $path;
}






?>