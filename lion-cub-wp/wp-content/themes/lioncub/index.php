
<?php get_header(); ?>

<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('browse-genres') ) {
		include("templates/pages/browse-genres.php");
	}
?>

<?php get_footer(); ?>