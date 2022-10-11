<?php 
$album_name = get_field('album_name');
$artist_name = get_field('artist_name');
$album_cover = get_field('album_cover');
?>

<album-card>
	<picture class="album-cover">
		<img src="<?=$album_cover['url']?>">
	</picture>
	<h2><?=$album_name?></h2>
	<h3><?=$artist_name?></h3>
	<a href='<?php the_permalink(); ?>'>Read More</a>
</album-card>