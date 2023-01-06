<?php 
	if($listTitle == "PHP") { ?>
			<li 
			<?php ?>
			<?php 
			if ($exercise['languages']['PHP'] == true) { ?>
				class="completed" 
			<?php	} ?>>
			<a href="<?="efp/" . $exercise['slug'] . "/index.php"?>">
				<?=$exercise['name']?>
				
			</a></li>	
<?php	} ?>

<?php 
	if($listTitle == "JavaScript") { ?>
			<li 
			<?php ?>
			<?php 
			if ($exercise['languages']['JavaScript'] == true) { ?>
				class="completed" 
			<?php	} ?>>
			<a href="<?="efp/" . $exercise['slug']?>">
				<?=$exercise['name']?>
				
			</a></li>
<?php	} ?>



