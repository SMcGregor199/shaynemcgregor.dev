
<bridge-post>
	<?php include('modules/description.php');?>

	<image-pillars>
		<?php foreach($section['images'] as $linkPath) { ?>
			<?php $pathExtension = pathinfo($linkPath, PATHINFO_EXTENSION); ?>

			<?php if($pathExtension == 'jpeg' || $pathExtension ==  'png') { ?>
				<picture class="graphic-image">
					<img src="<?=$linkPath?>">
				</picture>
			<?php }	?>

			<?php	if($pathExtension == 'svg') {?>
				<?php include($linkPath); ?>
				<?php } ?>

		<?php	} ?>

	</image-pillars>

</bridge-post>