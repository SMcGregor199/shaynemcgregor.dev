<project-card>
	<picture class = "thumbnail">
		<img src='<?=$project["thumbnail"]?>'>
	</picture>

	<a href=""><p class = "important-voice"><?=$project["title"]?></a></p>

	<div class="project-info">
		<span class="important-voice">Goal:</span><p class="base-voice"><?=$project["goal"]?></p>

		<span class="important-voice">Description:</span><p class="base-voice"><?=$project["description"]?></p>

		<span class="important-voice">Process:</span><p class="base-voice"><?=$project["process"]?></p>
	</div>
</project-card>