
<?php get_header(); ?>

<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('genres') ) {
		include("templates/pages/genres.php");
	}

	if ( is_singular('genre') ) {
		include('templates/pages/genre-book-detail.php');
	}
?>

<?php get_footer(); ?>