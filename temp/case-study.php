<?php include('modules/projects-database.php'); ?>
<?php $current_projectid = $_GET['projectID'];?>
<section>
	<inner-column>
	<?php foreach($projects_database as $project) { ?>

		<?php if($current_projectid == $project['id']){ ?>

			<h1><?=$project['goal']?></h1>
			<h1><?=$project['process']?></h1>

	<?php	} ?>
		
<?php } ?>
	</inner-column>
</section>