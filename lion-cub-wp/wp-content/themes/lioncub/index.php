
<?php get_header(); ?>

<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('example-page') ) {
		include("templates/pages/example-page.php");
	}

	if ( is_page('example-page-2') ) {
		include("templates/pages/example-page-two.php");
	}
?>

<?php get_footer(); ?>