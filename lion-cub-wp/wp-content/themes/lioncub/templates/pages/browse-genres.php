<h2 class="section-heading-font">Genre Categories</h2>

<?php
	createGenreLinks('genre','book');
?>

<?php
	$parameters = array(
	  "post_type" => "book",
	  "orderby" => "ID",
	  "order" => "ASC",
	);

	$query = new WP_Query($parameters);
	

	while ($query->have_posts()) : $query->the_post(); ?>
	
	<?php
	echo get_field('title'); 
	?>
		

<?php	endwhile;

	//reset what was done above.
	//Allows looping of more items below this.
	wp_reset_postdata();
?>



