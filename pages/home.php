<?php 
		$homePageJson = file_get_contents('data/home.json');
		$homePage = json_decode($homePageJson, true);
		$sections = $homePage['sections'];
 ?>

<?php foreach($sections as $section) { ?>
	<section id="<?=$section['slug']?>" class="<?=$section['slug']?>">
		<inner-column>
			<?php include('modules/' . $section['module']); ?>	
		</inner-column>
		<space></space>
	</section>
<?php } ?>

