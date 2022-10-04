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
<section class="featured">
	<inner-column>
		<div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
		  <div class="carousel-cell" style="background-image: url('images/red-heart-01.png')"><h1>This is Shayne's Pixel Art</h1></div>
		  <div class="carousel-cell" style="background-image: url('images/lion-cub-thumb.png')"></div>
		  <div class="carousel-cell" style="background-image: url('images/lion.jpg')"></div>
		  <div class="carousel-cell" style="background-image: url('images/shayne.jpg')"></div>
		  <div class="carousel-cell" style="background-image: url('images/php-exercise.jpg')"></div>
		</div>
	</inner-column>
</section>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<?php


	

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
