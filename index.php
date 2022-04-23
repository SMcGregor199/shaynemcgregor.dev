

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

			if($page == '01') {
				include("modules/forms/hello-world.php");
			}

			if($page == '02') {
				include("modules/forms/exercise-02.php");
			}

			if($page == '03') {
				include("modules/forms/exercise-03.php");
			}

			if($page == '04') {
				include("modules/forms/exercise-04.php");
			}

			if($page == '05') {
				include("modules/forms/exercise-05.php");
			}


?>

		
<?php include("modules/footer.php");?>
