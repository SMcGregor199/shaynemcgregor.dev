<h2 class="section-heading-font">Genre Categories</h2>

<?php
	var_dump(get_field('book_cover'));
	$parameters = array(
	  "post_type" => "book",
	  "orderby" => "ID",
	  "order" => "ASC",
	);

	$query = new WP_Query($parameters);
	

	while ($query->have_posts()) : $query->the_post();
		$book_cover = get_field('book_cover')['url'];
	   echo "<picture><img src='$book_cover'></picture>";
	endwhile;

	//reset what was done above.
	//Allows looping of more items below this.
	wp_reset_postdata();
?>



