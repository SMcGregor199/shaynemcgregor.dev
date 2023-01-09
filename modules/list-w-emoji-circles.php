<?php 
	if($listTitle == "PHP") { ?>
			<li 
			<?php 
			if ($exercise['languages']['PHP'] == true) { ?>
				class="completed" 
			<?php	} ?>>
			<a href="<?="efp/" . $exercise['slug'] . "/index.php"?>" class="link-voice">
				<?=$exercise['name']?>
				
			</a></li>	
<?php	} ?>

<?php 
	if($listTitle == "JavaScript") { ?>
			<li 
			<?php 
			if ($exercise['languages']['JavaScript'] == true) { ?>
				class="completed" 
			<?php	} ?>>
			<a href="<?="efp/" . $exercise['slug']?>" class="link-voice">
				<?=$exercise['name']?>
				
			</a></li>
<?php	} ?>



