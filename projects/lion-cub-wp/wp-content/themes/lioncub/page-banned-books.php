<?php get_header();  ?>


<h1 class="title-font"> <?php the_field('welcome_heading') ?></h1>
<section>
	<inner-column>
		<?php


			if( have_rows('banned_books') ):
				while( have_rows('banned_books') ) : the_row();
					$title = get_sub_field('title');
					$blurb = get_sub_field('blurb');
					$book_cover = get_sub_field('book_cover')['url']; 
					$authors = get_sub_field('author');
					if($authors):
						foreach( $authors as $author ):
							$permalink = get_permalink( $author->ID );
							$name = get_field( 'name', $author->ID );
							$author = $name;
						endforeach;
					endif; 
					include('templates/components/book-card-module.php');
			   endwhile;
			endif;

?>
	</inner-column>
</section>
<?php get_footer(); ?>


