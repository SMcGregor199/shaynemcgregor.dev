<?php 
// Connects Style Sheet to Index File

function enqueue_main_style_css() {
   wp_enqueue_style( 'style.css', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'enqueue_main_style_css' );

/**
 * Enqueue front-end styles.
 */
// function my_theme_styles() {

//     // Enqueue the same style sheet in the front-end.
//     wp_enqueue_style( 'my-theme', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );

//     // Inline the contents of the style.css file, if possible.
//     wp_style_add_data( 'my-theme', 'path', get_stylesheet_uri() );    
// }
//    add_action( 'wp_enqueue_scripts', 'my_theme_styles' );


//Add Block Editor Stylesheet to Admin Side
function enqueue_editor_style_css() {
   wp_enqueue_style('editor_style_css',
   get_theme_file_uri( "css/editor-style.css" ));
}
add_action( 'enqueue_block_editor_assets', 'enqueue_editor_style_css' );

/**
 * Enqueue editor styles.
 */
// if ( ! function_exists( 'my_theme_setup' ) ) :
//     function my_theme_setup()  {

//         // Enqueue the style sheet in the editor.
//         add_editor_style( 'style.css' );
//     }
//     add_action( 'after_setup_theme', 'my_theme_setup' );
// endif;




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