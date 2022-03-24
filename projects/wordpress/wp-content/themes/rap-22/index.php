<?php get_header(); ?>

	<?php 

	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if (is_page('blog') ) { 
		
	}

	if (is_page('album-voting') ) { 
		
	}

	if (is_page('track-of-the-week') ) { 
		
	}

	if (is_page('album-of-the-month') ) { 
	
	}


?>

<?php get_footer(); ?>