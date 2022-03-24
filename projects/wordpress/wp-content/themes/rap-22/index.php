<?php get_header(); ?>

	<?php 

	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if (is_page('blog') ) { 
		include("templates/pages/blog.php");
	}

	if (is_page('album-voting') ) { 
		include("templates/pages/album-voting.php");
	}

	if (is_page('track-of-the-week') ) { 
		include("templates/pages/track-of-the-week.php");
	}

	if (is_page('album-of-the-month') ) { 
		include("templates/pages/album-of-the-month.php");
	}


?>

<?php get_footer(); ?>