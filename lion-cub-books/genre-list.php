<?php
	$genre_json = file_get_contents("genres.json");
	$genres = json_decode($genre_json,true);

?>
<section class="genre-list">
	<ul>
	<li>
		<?php foreach($genres as $genre) { ?>
			<a href="?page=genre&genreID=<?=$genre['id']?>"><?=$genre['name']?></a>
		<?php } ?>
	</li>
</ul>
</section>
