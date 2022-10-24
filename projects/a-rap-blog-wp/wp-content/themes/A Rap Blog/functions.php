<?php 
// Connects Style Sheet to Index File
function mytheme_enqueue_style() {
   wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );


//Add Block Editor Stylesheet to Admin Side
add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( 'a-rap-blog-custom-block-editor-styles',
        get_theme_file_uri( "mytheme_enqueue_style" ),
        false, wp_get_theme()->get( 'Version' ));
} );




// Removes Admin Bar from Live Site Page
add_filter( 'show_admin_bar', '__return_false' );


//Add Menu Bar
function register_my_menu() {
  register_nav_menu('site-menu',__( 'Site Menu' ));
}
add_action( 'init', 'register_my_menu' );

function getFile($path) {
  return dirname(__FILE__) . '/' . $path;
}


//Add blog-header block
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/blog-header' );
}


?>