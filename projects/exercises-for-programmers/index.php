

<?php include('header.php'); ?>
<?php include('functions/functions.php'); ?>
<?php 
	$exerciseData = getData("exercises.json");
?>

<section class="efp-all-exercises-list">
<inner-column>
	<?php 
		foreach ($exerciseData['exercise-lists'] as $list) { ?>
			<?php include("modules/list-w-emoji-circles.php"); ?>
	<?php	} ?>
</inner-column>
</section>



<?php include('footer.php'); ?>
