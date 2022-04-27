

<?php 
	/* router */
	$page = null;
	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
?>

<?php include("modules/header.php");?>

<?php	
		if ($page == "home") {
		include('home.php');
		} 

		if($page == "case-study") {
			include('case-study.php');
		}

		if($page == "style-guide") {
			include('style-guide.php');
		}

		if($page == "goals") {
			include('goals/goals.php');
		}

		if($page == 'php-exercises') {
			include('php-exercises.php');
		}


?>

		
<?php include("modules/footer.php");?>
