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

//Finds the file path
function getFile($path) {
  return dirname(__FILE__) . '/' . $path;
}

//loops through custom taxonomy 
function createGenreLinks($customTax) {
  $genres = get_terms(
                array($customTax),
                array(
                        'hide_empty'    => false,
                        'orderby'       => 'name',
                        'order'         => 'ASC'
                    )
            );

if( $genres ) :

    foreach( $genres as $term ) :
        $url = $term->slug;
        echo "<a href='$url'>$term->name</a>";



      

    endforeach;

endif; 
}

  function showCode($thing) {
    echo "<pre>";
    echo "<code>";
    echo print_r($thing);
    echo "<code>";
    echo "</pre>";
  }

