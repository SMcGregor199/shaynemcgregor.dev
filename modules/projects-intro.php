<?php 
	include('modules/section-heading.php');
?>

<?php 
	$projects = getData('data/projects.json');
	include("modules/project-gallery.php"); 
 ?>