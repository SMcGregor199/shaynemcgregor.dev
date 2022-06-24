<?php $projects = getData('data/projects.json'); 

	if($page == 'style-guide') { 

		$projects = getData('data/default-project.json');
	}
?>

<projects-gallery>
	<?php foreach($projects as $projectID => $project) { ?>
		<project-card>
			<picture class="project-image">
				<img src="<?=$project['image']?>">
			</picture>

			<project-card-text>
				<h3 class="card-title-font"><?=$project['title']?></h3>
				<p class="paragraph-font"><?=$project['content']?></p>
				<a href="?page=case-study&projectID=<?=$projectID?>" target="<?=$project['title']?>" class="link-font"><?=$project['linkText']?></a>
			</project-card-text>
		</project-card>
	<?php } ?>
</projects-gallery>