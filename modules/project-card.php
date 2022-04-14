<project-card>

	<heading>
		<h1 class="important-voice"><?=$project["title"]?></h1>
		<p class="paragraph-voice"><?=$project["category"]?></p>
		<description>
			<p class="paragraph-voice"><?=$project["description"]?></p>
		</description>
	</heading>


	<thumbnail-link>
		<picture class = "thumbnail">
			<img src='<?=$project["thumbnail"]?>'>
		</picture>
		<nav class="project-links">
			<a href="?page=case-study&projectID=<?=$project['id']?>" target="testing" class="paragraph-voice" rel="toggle-site-nav">Case Study</a>
		</nav>
	</thumbnail-link>

</project-card>

<!-- <?=$project["title"]?> -->