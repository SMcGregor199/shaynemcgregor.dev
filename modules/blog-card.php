<card-gallery>
	<?php include("modules/blogs-database.php"); ?>
	<?php foreach ($database as $blog) {   ?>
		<base-blog-card>
			<h3 class="card-title-font"><?=$blog['title']?></h3>
			<p class="paragraph-font"><?=$blog['content']?></p>
			<a href="<?=$blog['link']?>" target="<?=$blog['linkTarget']?>" class="link-font"><?=$blog['linkText']?></a>
		</base-blog-card>
	<?php	} ?>
</card-gallery>


	
				