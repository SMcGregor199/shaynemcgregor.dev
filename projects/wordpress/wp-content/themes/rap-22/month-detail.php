<?php 
$album_list = get_field('album_list');


foreach ($album_list as $album) {
	echo "This is an album";
	// code...
}

?>

<section>
	<inner-column>
		<?php
			$album_list = get_field('album_list');
			if( $album_list ): 
		?>
				<ul>
					<?php foreach( $album_list as $album_list ): 
						$permalink = get_permalink( $album_list->ID );
						$title = get_the_title( $album_list->ID );
						$custom_field = get_field( 'field_name', $album_list->ID );
					?>
					<li>
						<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
						<span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
					</li>
					<?php endforeach;
					 ?>
				</ul>
			<?php endif;
		?>
	</inner-column>
</section>