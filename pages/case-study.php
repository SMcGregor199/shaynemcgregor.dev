<?php 
	$projectsJson = file_get_contents("data/projects.json");
	$projects = json_decode($projectsJson, true);
?>
<?php 
	$current_project_id = $_GET["projectID"]; 
?>
<?php foreach($projects as $projectID => $project) { ?>
	<?php if($current_project_id == $projectID) { ?>

		<h1>This is Lion Cub Case Study Page</h1>

	<?php } else { ?>
				<h1>This the Case Study of a different project</h1>
				<?php }?>
<?php } ?>





			

