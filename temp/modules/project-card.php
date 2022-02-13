<project-card>
	<project-heading>
		<picture class = "thumbnail">
			<img src='<?=$project["thumbnail"]?>'>
		</picture>

		<a href="<?=$project['link']?>" target="<?=$project['title']?>"><p class="important-voice"><?=$project["title"]?></a></p>
	</project-heading>

	<project-info>
		<span class="important-voice">Goal:</span><p class="base-voice"><?=$project["goal"]?></p>

		<span class="important-voice">Description:</span><p class="base-voice"><?=$project["description"]?></p>

		<span class="important-voice">Process:</span><p class="base-voice"><?=$project["process"]?></p>
	<project-info>
</project-card>