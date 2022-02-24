<?php include('modules/projects-database.php'); ?>

<section>
	<inner-column>
	<?php foreach($projects_database as $project) { ?>
		<h1><?=$project['goal']?></h1>
		<h1><?=$project['process']?></h1>
	<?php } ?>
	</inner-column>
</section>