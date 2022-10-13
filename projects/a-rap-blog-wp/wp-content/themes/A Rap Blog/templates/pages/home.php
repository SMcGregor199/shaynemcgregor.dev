
<?php
	$welcomeMessage = get_field('welcome_message');
?>
<section class="welcome">
	<inner-column>
		<h1><?=$welcomeMessage?></h1>
	</inner-column>
</section>

<section class="posts-collection">
	<inner-column>
		<div class="blog-card-grid">
			<?php 

			  $parameters = array(
			    "post_type" => "post"
			  );

			  $query = new WP_Query($parameters);
			 
			  while ($query->have_posts()) : $query->the_post();
			   include( getFile('templates/components/blog-card.php') );
			  endwhile;

			  //reset what was done above.
			  //Allows looping of more items below this.
			  wp_reset_postdata();
			?>
		</div>
	</inner-column>
</section>

