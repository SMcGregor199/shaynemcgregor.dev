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
		<?php include('modules/project-grid.php');?>
	</inner-column>
</section>

<?php } ?>

<?php
	include("modules/footer.php"); 
?>

<!-- This is the Projects Page -->
<?php if($page == 'projects') { ?>
	<?php include('pages/projects/lion-cub.php'); ?>
<?php } ?>


<!-- This is API work that I will eventually move to another project -->
<!-- <script type="module" src="scripts/blkhistory.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> -->

