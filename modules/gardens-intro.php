<?php 
	include('modules/section-heading.php');
?>

<?php 
	$gardens = getData('data/gardens.json');
	include("modules/gardens-gallery.php"); 
?>