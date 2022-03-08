<?php 

function mytheme_enqueue_style() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );
?>