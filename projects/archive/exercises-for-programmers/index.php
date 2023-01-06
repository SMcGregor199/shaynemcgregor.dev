

<?php include('header.php'); ?>
<?php include('functions/functions.php'); ?>
<?php 
	$exerciseData = getData("exercises.json");
?>

<section class="efp-all-exercises-list">
<inner-column>
	<div class="list-containers">
		<?php $listTitle = "PHP" ?>
		<h1><?=$listTitle?></h1>
		<?php 
			foreach ($exerciseData as $exercise) { ?>
				<?php include('modules/list-w-emoji-circles.php'); ?>
		<?php	} ?>
	</div>

	<?php unset($listTitle) ?>

	<div class="list-containers">
		<?php $listTitle = "JavaScript"?>
		<h1><?=$listTitle?></h1>
		<?php 
			foreach ($exerciseData as $exercise) { ?>
				<?php include('modules/list-w-emoji-circles.php'); ?>
		<?php	} ?>
	</div>

	<?php unset($listTitle) ?>


</inner-column>
</section>



<?php include('footer.php'); ?>
