<?php 
	$goalsPageJson = file_get_contents('data/goals.json');
	$goalsPage = json_decode($goalsPageJson, true);
	$sections = $goalsPage['sections'];
 ?>

<?php
	foreach($sections as $section) { ?>
	<section id="<?=$section['slug']?>" class="<?=$section['slug']?>">
		<inner-column>
			<?php include('modules/' . $section['module']); ?>	
		</inner-column>
		<space></space>
	</section>
	<?php } ?>
?>


	




