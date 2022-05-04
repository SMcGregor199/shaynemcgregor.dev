
<?php 
	$layoutGardenPage = getData('data/layout-garden.json');
	$sections = $layoutGardenPage['sections'];
 ?>

 <?php foreach($sections as $section) { ?>
 	<section class="<?=$section['slug']?>">
 		<inner-column>
 			<?php include('modules/' . $section['module']); ?>	
 		</inner-column>
 	</section>
 <?php } ?>






