

<section class="welcome">
	<inner-column>
		<h1>Welcome to A Rap Blog</h1>
	</inner-column>
</section>

<section class="posts-collection">
	<inner-column>
		<?php 

		  $parameters = array(
		    "post_type" => "post"
		  );

		  $query = new WP_Query($parameters);
		 
		  while ($query->have_posts()) : $query->the_post();
		    echo get_the_title();
		  endwhile;

		  //reset what was done above.
		  //Allows looping of more items below this.
		  wp_reset_postdata();
		?>
	</inner-column>
</section>

