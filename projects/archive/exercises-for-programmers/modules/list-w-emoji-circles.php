<?php 
	if($listTitle == "PHP") { ?>
		<ul>
			<li 
			<?php ?>
			<?php 
			if ($exercise['languages']['PHP'] == true) { ?>
				class="completed" 
			<?php	} ?>>
			<a href="<?=$exercise['slug']?>">
				<?=$exercise['name']?>
				
			</a></li>
		</ul>	
<?php	} ?>

<?php 
	if($listTitle == "JavaScript") { ?>
		<ul>
			<li 
			<?php ?>
			<?php 
			if ($exercise['languages']['JavaScript'] == true) { ?>
				class="completed" 
			<?php	} ?>>
			<a href="<?=$exercise['slug']?>">
				<?=$exercise['name']?>
				
			</a></li>
		</ul>	
<?php	} ?>



