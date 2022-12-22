<?php get_header(); ?> 
<h1 class="title-font">Today's featured novelist is James Baldwin!</h1>

<section>
	<inner-column>
		<?php if( have_rows('content') ): ?>
			<?php while(have_rows('content') ): the_row(); ?>
				<?php if(get_row_layout() == 'featured_novelist_section'): ?>
					<?php 
						$title = get_sub_field('title');
						$blurb = get_sub_field('blurb');
						$book_cover = get_sub_field('book_cover')['url']; 
						$featured_image = get_sub_field('featured_image')['url']; 

						include('templates/components/featured-novelist-module.php');
					?>
				<?php endif ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</inner-column>
</section>	
<?php get_footer(); ?>