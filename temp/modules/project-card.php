<project-card>

	<heading>
		<h1 class="important-voice"><?=$project["title"]?></h1>
		<p class="intro-voice"><?=$project["category"]?></p>
	</heading>

	<description>
		<p class="intro-voice"><?=$project["description"]?></p>
	</description>

	<thumbnail-link>
		<picture class = "thumbnail">
			<img src='<?=$project["thumbnail"]?>'>
		</picture>
		<nav class="project-links">
			<a href="<?=$project['link']?>" target="<?=$project['title']?>" class="intro-voice">Project</a>
			<a href="<?=$project['caseStudy']?>&projectID=<?=$project['id']?>" class="intro-voice">Case Study</a>
		</nav>
	</thumbnail-link>

</project-card>