

<?php
	/* router */
	$page = null;

	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
	include('functions/functions.php');

	include("modules/header.php");
	if( isCaseStudy() ) {
		$projects = getData('data/projects.json');
		$current_project_id = $_GET["projectID"]; 
	}
	renderPage(getData('data/' . $page . '.json') );

 	include("modules/footer.php");

 ?>
