<?php 
$album_list = get_field('album_list');
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
						$custom_field = get_field( 'artist_name', $album_list->ID );
					?>
					<li>
						<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
						<span><?php echo esc_html( $custom_field ); ?></span>
					</li>
					<?php endforeach;
					 ?>
				</ul>
			<?php endif;
		?>
	</inner-column>
</section>