<section id="<?=$section['slug']?>" class="<?=$section['slug']?>">
	<inner-column>
		<?php if(isStyleGuide()) { ?>
		<a class="link-font" href="?page=module&type=<?=$section['slug']?>">Detail Link</a>
		<h2 class="section-heading-font"><?=$section['title']?></h2>
		<hr>
		<?php } ?>
		<?php include('modules/' . $section['module'] . '.php'); ?>	
	</inner-column>
	<space></space>
</section>