<?php get_header(); ?>

	<?php 

	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('list') ) {
		    $args = array(  
        'post_type' => 'album',
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
        include('templates/components/album-card.php');
        the_excerpt(); 
    endwhile;

    wp_reset_postdata(); 
	}

	if ( is_singular('rapper') ) {
		echo "<h1>This is the detail page</h1>";
	}

	if (is_page('months') ) {
		include('months-list.php');
	}
	?>

<?php get_footer(); ?>