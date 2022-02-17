<?php
	$genre_json = file_get_contents("genres.json");
	$genres = json_decode($genre_json,true);

?>

<ul>
	<li>
		<?php foreach($genres as $genre) { ?>
			<a href=""><?=$genre['name']?></a>
		<?php } ?>
	</li>
</ul>