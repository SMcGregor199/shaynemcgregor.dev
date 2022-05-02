<?php 
	$heading = isset($section['moduleTitle'])  ? $section['moduleTitle'] : "Section Heading Module";
	$content = isset($section['content']) ? $section['content'] : "Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups";
 ?>

<section-heading>
	<h2 class="section-heading-font"><?=$heading?></h2>
	<p class="paragraph-font"><?=$content?></p>
</section-heading>

<?php 
	unset($heading, $content);
?>

