<?php get_header(); ?> 

<section>
  <inner-column>
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
  </inner-column>
</section>

<?php get_footer(); ?>