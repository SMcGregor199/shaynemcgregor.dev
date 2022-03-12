<?php 
	$args = array(  
		'post_type' => 'month',
	);

	$loop = new WP_Query( $args ); 

	while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			<?=the_field('month_name')?>
		</a>

<?php    
	endwhile;

	wp_reset_postdata(); 
?>

