<?php 
	include('modules/section-heading.php');
?>

<?php 
	$blogs = getData('data/blogs.json');
	include("modules/blog-gallery.php"); 
 ?>



