<projects-gallery>
	<?php foreach($projects as $project) { ?>
		<project-card>
			<picture class="project-image">
				<img src="<?=$project['image']?>">
			</picture>

			<project-card-text>
				<h3 class="card-title-font"><?=$project['title']?></h3>
				<p class="paragraph-font"><?=$project['content']?></p>
				<a href="<?=$project['link']?>" target="<?=$project['title']?>" class="link-font"><?=$project['linkText']?></a>
			</project-card-text>
		</project-card>
	<?php } ?>
</projects-gallery>