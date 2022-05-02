
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






<section class='layout-02'>
<inner-column>

		<?php include('modules/layout-02.php'); ?>

</inner-column>
</section>



<section class='layout-03'>
<inner-column>
	
	<?php include('modules/layout-03.php'); ?>

</inner-column>
</section>



<section class='layout-04'>
<inner-column>

	<?php include('modules/layout-04.php'); ?>

</inner-column>
</section>

<section class='layout-05'>
<inner-column>

	<?php include('modules/layout-05.php'); ?>

</inner-column>
</section>



<?php include('footer.php'); ?>
