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
						$artist_name = get_field( 'artist_name', $album_list->ID );
						$album_cover = get_field( 'album_cover', $album_list->ID);
					?>
					<li>
						<album-card>
							<picture class="album-cover">
								<img src="<?=$album_cover['url']?>">
							</picture>
								<h2><?=$title?></h2>
								<h3><?=$artist_name?></h3>
								<a href='<?=$permalink?>'>Read More</a>
						</album-card>
					</li>
					<?php endforeach;
					 ?>
				</ul>
			<?php endif;
		?>
	</inner-column>
</section>