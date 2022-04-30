<article>
	<h2 class="section-heading-font"> <?=$section['moduleTitle']?> </h2>
	<?php foreach ($section['contents'] as $content) { ?>
		<p class="paragraph-font"> <?=$content?> </p>
	<?php } ?>
	<a href="<?=$section['moduleLink']?>" target="<?=$section['moduleTitle']?>" class="link-font"> <?=$section['moduleLinkText']?> </a>
</article>


