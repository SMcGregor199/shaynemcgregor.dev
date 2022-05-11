<?php 
	$styleGuide = getData('data/style-guide.json');

	echo "<h1 class='page-title title-font'>Style Guide</h1>"; ?>

	<?php include('modules/fonts-style-guide.php');?>
	<?php include('modules/type-patterns-style-guide.php'); ?>
	<?php include('modules/colors-style-guide.php'); ?>

<?php 
	renderPage($styleGuide);
?>





