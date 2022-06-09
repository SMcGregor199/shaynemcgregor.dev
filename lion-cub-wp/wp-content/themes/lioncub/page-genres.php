<?php get_header(); ?>
<h2 class="section-heading-font">Genre Categories</h2>
<?php 
	$terms = get_terms( array(
    'taxonomy' => 'genre',
    'hide_empty' => false,
    'order' => 'ASC',
	) );

	foreach ($terms as $term){
		
		 $url = get_term_link($term,'genre');
     	 echo "<a href='$url'>$term->name</a>";
	}
?>
<?php get_footer(); ?>