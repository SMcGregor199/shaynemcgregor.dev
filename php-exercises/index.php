

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
		<li><a href="?page=01">Quotes and Authors</a></li>
		<li><a href=""></a></li>
		<li><a href=""></a></li>
		<li><a href=""></a></li>
		<li><a href=""></a></li>
	</ul>
</nav>

<?php 
	if($page == '01') {
		include("modules/exercise-01.php");
	}
?>




<?php include('footer.php'); ?>
