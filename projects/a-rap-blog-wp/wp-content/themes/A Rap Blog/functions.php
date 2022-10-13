<?php 
// Connects Style Sheet to Index File
function mytheme_enqueue_style() {
   wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );

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

?>