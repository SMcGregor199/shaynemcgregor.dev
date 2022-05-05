<?php $blogs = getData('data/blogs.json');

	if($page == 'style-guide') { 

		$blogs = getData('data/default-blog.json');
	}
?>

<blog-gallery>
	<?php foreach ($blogs as $blog) {   ?>
		<blog-card>
			<h3 class="card-title-font"><?=$blog['title']?></h3>
			<p class="paragraph-font"><?=$blog['content']?></p>
			<a href="<?=$blog['link']?>" target="<?=$blog['linkTarget']?>" class="link-font"><?=$blog['linkText']?></a>
		</blog-card>
	<?php	} ?>
</blog-gallery>


	
				