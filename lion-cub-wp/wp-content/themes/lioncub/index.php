
<?php get_header(); ?>

<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if(is_page('all-books')) {
		include('templates/pages/all-books.php');
	}
?>

<?php get_footer(); ?>