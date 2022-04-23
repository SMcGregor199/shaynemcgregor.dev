<?php 
	if($horizontalImages == true) {
		$columnImages = "column-true";
	} else {
		$columnImages = null;
	}
	
?>
<bridge-post>
	<article>
		<h2 class="section-heading-font"> <?=$title?> </h2>
		<?php foreach ($contents as $content) { ?>
			<p class="paragraph-voice"> <?=$content?> </p>
		<?php } ?>
	</article>

	<image-pillars class="<?=$columnImages?>" >

		<?php foreach($images as $linkPath) { ?>
			<?php $pathExtension = pathinfo($linkPath, PATHINFO_EXTENSION); ?>

			<?php if($pathExtension == 'jpeg' || $pathExtension ==  'png') { ?>
				<picture class="graphic-image">
					<img src="<?=$linkPath?>">
				</picture>
			<?php }	

					if($pathExtension == 'svg') {?>
					<?php include($linkPath); ?>
				<?php } ?>

		<?php	} ?>

	</image-pillars>

</bridge-post>