
<?php get_header(); ?>

<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('genre') ) {
		include("templates/pages/browse-genres.php");
	}

	if ( is_singular('genre') ) {
		include('templates/pages/book-detail.php');
	}
?>

<?php get_footer(); ?>