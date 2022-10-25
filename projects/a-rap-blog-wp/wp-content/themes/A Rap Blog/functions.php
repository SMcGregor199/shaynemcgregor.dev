<?php 
// Connects Style Sheet to Index File

function enqueue_main_style_css() {
   wp_enqueue_style( 'style.css', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'enqueue_main_style_css' );


//Add Block Editor Stylesheet to Admin Side
function enqueue_editor_style_css() {
   wp_enqueue_style('editor_style_css',
   get_theme_file_uri( "css/editor-style.css" ));
}
add_action( 'enqueue_block_editor_assets', 'enqueue_editor_style_css' );




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


//Add blog-header block
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/blog-header' );
}
add_action( 'init', 'register_acf_blocks' );



?>