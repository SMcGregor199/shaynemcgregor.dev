<?php 
	$heading = isset($section['moduleTitle'])  ? $section['moduleTitle'] : "Graphic Diptych Module";
	$content = isset($section['content']) ? $section['content'] : "Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups";
	$linkPath = isset($section['linkPath']) ? $section['linkPath'] : "images/default.jpeg";

	$pathExtension = pathinfo($linkPath, PATHINFO_EXTENSION);
?>

<graphic-diptych>

	<?php include('modules/section-heading.php'); ?>

	<picture class="graphic-image">

		<?php if($pathExtension == 'jpeg' || $pathExtension ==  'png') { ?>
			<img src="<?=$linkPath?>">

		<?php	} if($pathExtension == 'svg') { ?>
			<?php include($linkPath); ?>
		<?php } ?> 

	</picture>

</graphic-diptych>