<?php 
	$homePage = getData('data/style-guide.json');
	$sections = $homePage['sections'];

	$type = $_GET['type'];

	foreach($sections as $section){
		if($section['slug'] == $type) { ?>
			<section id="<?=$section['slug']?>" class="<?=$section['slug']?>">
				<inner-column>
					<?php include('modules/' . $section['module'] . '.php'); ?>	
				</inner-column>
				<space></space>
			</section>
		<?php	} 
} ?>

