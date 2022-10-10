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
		  <div class="carousel-cell" style="background-image: url('images/red-heart-01.png'); background-repeat: space; position: relative;">
		  		<div class="carousel-background">
		  			<h1>Pixel Art Gallery(WordPress)</h1>
			  		<p>I love pixel art, and I practice making them every day. If you want to keep up with what I've been working on, check out my pixel art gallery that I made in WordPress. <a href="#">Click Here</a> to take a look</p>
		  	  </div>
		  	</div>
		  <div class="carousel-cell" style="background-image: url('images/lion-cub-thumb.png')"></div>
		  <div class="carousel-cell" style="background-image: url('images/lion.jpg')"></div>
		  <div class="carousel-cell" style="background-image: url('images/shayne.jpg')"></div>
		  <div class="carousel-cell" style="background-image: url('images/php-exercise.jpg')"></div>
		</div>
	</inner-column>
</section>

<h1 class="output">Shayne</h1>

<script type="module" src="scripts/psn-api.js"></script>
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
