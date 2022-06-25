

<?php 
	/* router */
	$page = null;
	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
?>

<?php	
		if ($page == "home") {
		include('home.php');
		} 

		if($page == "case-study") {
			include('case-study.php');
		}

?>

		
<?php include("modules/footer.php");?>
