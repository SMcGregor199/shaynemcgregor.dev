

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
		include('pages/case-study.php');
	} else {
		renderPage(getData('data/' . $page . '.json') );
	}
	

 	include("modules/footer.php");

 ?>
