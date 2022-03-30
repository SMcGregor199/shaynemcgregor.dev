<?php
	$genres = getGenreDatabase();

?>
<section class="genre-list">
	<inner-column>
		
		<ul>
			<li>
				<?php foreach($genres as $id => $genre) { ?>
					<a href="?page=genre&genreID=<?=$id?>"><?=$genre['name']?></a>
				<?php } ?>
			</li>
		</ul>
	</inner-column>
</section>
