<?php get_header(); ?>

<h1 class="title-font"><?php the_field('welcome_heading') ?></h1>
<section>
	<inner-column>
		<?php 
			$terms = get_terms( array(
		    'taxonomy' => 'genre',
		    'hide_empty' => false,
		    'order' => 'ASC',
			) ); ?>
			<nav class="genre-list">
		<?php 
			foreach ($terms as $term){
				
				 $url = get_term_link($term,'genre');
		     	 echo "<a class='link-font' href='$url'>$term->name</a>";
			} ?>
			</nav>
	</inner-column>
</section>

<?php get_footer(); ?>