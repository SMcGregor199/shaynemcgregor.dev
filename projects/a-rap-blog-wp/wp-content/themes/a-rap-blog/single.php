<?php get_header(); ?>

<div class="container">
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>
				<h1><?=the_title();?></h1>

				<?php the_content();?>
				</div> <!--  end of blog-body class kind of a hack 	   -->
	<?php		} // end while
		} // end if
?>

</div>

<?php get_footer(); ?>