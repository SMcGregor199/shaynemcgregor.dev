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

?>

<?php if($page == 'home') { ?>

<section>
	<inner-column>
		<?php include('modules/hero.php');?>
	</inner-column>
</section>


<section>
	<inner-column>
		<h1>Testing #2</h1>
		<?php include('modules/project-article-grid.php');?>
	</inner-column>
</section>

<?php } ?>

<?php
	include("modules/footer.php"); 
?>




