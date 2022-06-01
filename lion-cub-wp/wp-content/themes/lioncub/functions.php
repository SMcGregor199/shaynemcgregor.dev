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
function createGenreLinks($customTax, $postType) {
  $genres = get_terms(
                array($customTax),
                array(
                        'hide_empty'    => false,
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'number'        => 6 //specify yours
                    )
            );

if( $genres ) :

    foreach( $genres as $term ) :

        //var_dump( $term );
        echo "<a href=''>$term->name</a>";

        $args = array(
                'post_type'             => $postType,
                'posts_per_page'        => 10, //specify yours
                'post_status'           => 'publish',
                'tax_query'             => array(
                                            array(
                                                'taxonomy' => 'category',
                                                'field'    => 'slug',
                                                'terms'    => $term->slug,
                                            ),
                                        ),
                'ignore_sticky_posts'   => true //caller_get_posts is deprecated since 3.1
            );
        $_posts = new WP_Query( $args );

        if( $_posts->have_posts() ) :
            while( $_posts->have_posts() ) : $_posts->the_post();

                echo '<h5>'. get_the_title() .'</h5>';

            endwhile;
        endif;
        wp_reset_postdata(); //important

    endforeach;

endif; 
}

