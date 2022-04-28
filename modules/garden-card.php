<gardens>
	<?php foreach($gardens as $garden) { ?>
		<garden-card>
			<h3 class="card-title-font"><?=$garden['title']?></h3>
			<p class="paragraph-font"><?=$garden['content']?></p>
			<a href="<?=$garden['link']?>" target="#"class="link-font"><?=$garden['linkText']?></a>
		</garden-card>
	<?php } ?>
</gardens>
