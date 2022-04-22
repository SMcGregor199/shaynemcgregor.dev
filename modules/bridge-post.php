<?php $pathExtension = pathinfo($linkPath, PATHINFO_EXTENSION); ?>
<bridge-post>
	<?php include('modules/section-heading.php'); ?>

	<image-pillars>
		<?php foreach($images as $image) { ?>
			<picture class="graphic-image">
				<img src="<?=$linkPath?>">
			</picture>
		<?php	} ?>
	</image-pillars>

</bridge-post>