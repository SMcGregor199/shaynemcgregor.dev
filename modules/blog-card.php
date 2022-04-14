<?php 

?>

<blog-card>
	<picture class = "thumbnail">
		<img src='<?=$blog["thumbnail"]?>'>
	</picture>

	<blog-card-text>	
		<p class="important-voice"><?=$blog["title"]?></p>
		<a href="<?=$blog['link']?>" target="<?=$blog['target']?>" class="paragraph-voice">Read</a>
	</blog-card-text>
</blog-card>