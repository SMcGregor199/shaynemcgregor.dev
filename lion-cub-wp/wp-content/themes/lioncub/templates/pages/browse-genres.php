<?php
	$parameters = array(
	  "post_type" => "genre",
	  "orderby" => "ID",
	  "order" => "ASC",
	);

	$query = new WP_Query($parameters);

	while ($query->have_posts()) : $query->the_post();
	  include(getFile("templates/components/genre-list.php"));
	endwhile;

	//reset what was done above.
	//Allows looping of more items below this.
	wp_reset_postdata();
?>

