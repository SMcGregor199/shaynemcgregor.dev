<?php 
	    $args = array(  
        'post_type' => 'month',
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
         the_field('name');
        the_excerpt(); 
    endwhile;

    wp_reset_postdata(); 
?>