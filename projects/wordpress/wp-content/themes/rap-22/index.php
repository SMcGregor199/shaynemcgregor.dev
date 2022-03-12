<?php get_header(); ?>

	<?php 

	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('albums') ) {
		$args = array(  
			'post_type' => 'album',
		);

		$loop = new WP_Query( $args ); 

		while ( $loop->have_posts() ) : $loop->the_post(); 
			include('templates/components/album-card.php');
		 
		endwhile;

		wp_reset_postdata(); 
	}

	if ( is_singular('album') ) {
		echo "<h1>This is the detail page</h1>";
	}

	if (is_page('months') ) { //list page
		include('months-list.php');
	}

	if (is_singular('month') ) { //detail page
		include('month-detail.php');
	}
?>

<?php get_footer(); ?>