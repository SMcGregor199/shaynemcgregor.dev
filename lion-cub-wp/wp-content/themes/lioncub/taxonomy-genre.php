<?php get_header(); ?>



<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); 
    //
    include('templates/components/book-card.php');
    //
  } // end while
} // end if
?>
<?php get_footer(); ?>