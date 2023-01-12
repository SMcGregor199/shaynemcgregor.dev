<?php
	/* router */
	$page = null;

	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
	include('functions/functions.php');
	$exerciseData = getData("data/exercises.json");


	include("modules/header.php");

?>

<?php if($page == 'home') { ?>

<section class="featured">
	<inner-column>
		<div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
		  	<div class="carousel-cell" style="background-image: url('images/red-heart-01.png'); background-repeat: space; position: relative;">
		  		<div class="carousel-background">
		  			<h1 class="super-title-voice">Pixel Art Gallery(WordPress)</h1>
			  		<p class="base-voice">I love pixel art! If you want to keep up with what I've been working on, check out my pixel art gallery that I made in WordPress. <a href="#">Click Here</a> to take a look</p>
		  	  	</div>
			</div>
			
		  	<div class="carousel-cell" style="background-image: url('images/lion-cub-thumb.png')">
		
		  	</div>
		  <div class="carousel-cell" style="background-image: url('images/lion.jpg')"></div>
		  <div class="carousel-cell" style="background-image: url('images/shayne.jpg')"></div>
		  <div class="carousel-cell" style="background-image: url('images/php-exercise.jpg')"></div>
		</div>
	</inner-column>
</section>

<section>
	<inner-column>
		<h1 class="super-title-voice">Projects and Articles</h1>
		<?php include('modules/project-grid.php');?>
	</inner-column>
</section>

<section class="efp-all-exercises-list">
	<inner-column>
		<h1 class="super-title-voice">Exercises for Programmers</h1>
		<?php include('modules/efp-section-content.php'); ?>
	</inner-column>
</section>
<?php } ?>

<?php if($page == 'projects') { ?>
	<?php include('pages/projects/lion-cub.php'); ?>
<?php } ?>
<script type="module" src="scripts/blkhistory.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

