<?php get_header(); ?> 
<?php
  $term = get_queried_object();
  $genreTitle = $term->name;
?>
<h1 class="title-font">Welcome to the <?=$genreTitle?> page</h1>
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