<article-grid>
	<header>
		<h1>This is an "Article grid" module. This is its heading</h1>

		<p class="general-voice">Again, we totally just made that up. it's a box with boxes in it</p>
	</header>

	<div class="grid-gallery">
		<?php
			$articles = [1,2,3,4,5];

			foreach($articles as $article) {
				include("modules/article-card.php");
			}
		?>	
	</div>
</article-grid>