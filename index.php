

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

	// Testing GitHub Slack Integration 

	// 
	include("pages/temphomepage.php");
	//

	// OLD SITE LOGIC  
	// if( isCaseStudy() ) {
	// 	getProjectPageById($_GET['projectID']);
	// } else {
	// 	renderPage(getData('data/' . $page . '.json') );
	// }
	
	
	
	// OLD FOOTER
 	// include("modules/footer.php");

 ?>
