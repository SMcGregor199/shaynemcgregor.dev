

<?php include('header.php'); ?>
<?php include('functions/functions.php'); ?>
<?php 
	$exerciseData = getData("exercises.json");
	var_dump($exerciseData);
?>

<section>
<inner-column>
	<?php 
		foreach ($exerciseData['exercise-lists'] as $list) { ?>
			<?php $listTitle = $list["language-name"]; ?>
			<?php include("modules/list-w-emoji-circles.php"); ?>
	<?php	} ?>
</inner-column>
</section>



<?php include('footer.php'); ?>
