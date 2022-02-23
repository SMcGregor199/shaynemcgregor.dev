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
			<a href="<?=$project['link']?>" target="<?=$project['title']?>" class="intro-voice">Check Out the Project!</a>
			<a href="" class="intro-voice">Check Out the Case Study</a>
		</nav>
	</thumbnail-link>
	



<!-- 	<heading>
		<picture class = "thumbnail">
			<img src='<?=$project["thumbnail"]?>'>
		</picture>

		<a href="<?=$project['link']?>" target="<?=$project['title']?>"><p class="important-voice"><?=$project["title"]?></a></p>
	</heading>

	<project-info>
		<span class="important-voice">Goal:</span><p class="intro-voice"><?=$project["goal"]?></p>

		<span class="important-voice">Description:</span><p class="intro-voice"><?=$project["description"]?></p>

		<span class="important-voice">Process:</span><p class="intro-voice"><?=$project["process"]?></p>
	<project-info> -->

</project-card>