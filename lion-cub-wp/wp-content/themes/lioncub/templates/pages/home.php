<?php 
	$terms = get_terms( array(
    'taxonomy' => 'genre',
    'hide_empty' => false,
) );

	foreach ($terms as $term){
		showCode($term);
		the_permalink($term->term_id);

	}
?>
<section>
	<inner-column>
		<h1>This is the home page</h1>
		<h1>This is where I am to include the svgs</h1>
	</inner-column>
</section>