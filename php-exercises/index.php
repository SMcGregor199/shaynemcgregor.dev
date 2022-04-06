

<?php include('header.php'); ?>
<?php	/* router */
	
	$page = null;
	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
?>

<nav>
	<ul>
		<li><a class="description-voice" href="?page=01">Quotes and Authors</a></li>
		<li><a class="description-voice" href="?page=02">Counting Characters</a></li>
		<li><a class="description-voice" href="?page=03">Creating a Madlib</a></li>
		<li><a class="description-voice" href="?page=04">Retirement Calculator</a></li>
		<li><a class="description-voice" href="?page=05">Simple Math</a></li>
	</ul>
</nav>

<?php 
	if($page == '01') {
		include("modules/exercise-01.php");
	}

	if($page == '02') {
		include("modules/exercise-02.php");
	}

	if($page == '03') {
		include("modules/exercise-03.php");
	}

	if($page == '04') {
		include("modules/exercise-04.php");
	}

	if($page == '05') {
		include("modules/exercise-05.php");
	}
?>




<?php include('footer.php'); ?>
