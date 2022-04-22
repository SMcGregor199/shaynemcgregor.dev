
<?php $pathExtension = pathinfo($linkPath, PATHINFO_EXTENSION); ?>

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