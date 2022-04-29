<?php 
	$projectsJson = file_get_contents("data/projects.json");
	$projects = json_decode($projectsJson, true);
?>
<?php 
	$current_project_id = $_GET["projectID"]; 
?>
<?php foreach($projects as $projectID => $project) { ?>
	<?php if($current_project_id == $projectID) { ?>
<!-- Start of Current Case Study -->
		<h1>This is the Lion Cub Case Study</h1>
<!-- End of Current Case Study -->
	<?php } else { ?>
				<h1>This the Case Study of a different project</h1>
				<?php }?>
	<a href="?page=home" class="link-font" rel="toggle">Go Back to Home</a>
<?php } ?>





			

