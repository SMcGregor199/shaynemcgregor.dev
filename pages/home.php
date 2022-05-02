<?php 
	$homePage = getData('data/home.json');
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

