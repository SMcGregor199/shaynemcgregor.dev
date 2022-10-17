<?php get_header(); 
	$currentAuthor = get_field('name');
?>

<h1 class="title-font">This is the Author Page where we display all the books of <?php echo $currentAuthor ?></h1>

<section>
	<inner-column>
<?php
  $parameters = array(
    "post_type" => "book",
    "orderby" => "ID",
    "order" => "ASC",
    "posts_per_page" => -1
  );

  $query = new WP_Query($parameters);
   if ( $query->have_posts() ): 
  		while ($query->have_posts()) : $query->the_post();
  			$authors = get_field('author');
  				if( $authors ):
  					foreach( $authors as $author ):
  						$name = get_field( 'name', $author->ID );
  						if($name == $currentAuthor):
  							include('templates/components/book-card.php');
  						endif;
  					endforeach; 
  				endif;
  		endwhile;
  	endif;

  //reset what was done above.
  //Allows looping of more items below this.
  wp_reset_postdata();

?>
	</inner-column>
</section>
<?php get_footer(); ?>