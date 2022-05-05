<?php 
	$homePage = getData('data/style-guide.json');
	$sections = $homePage['sections'];
 ?>

		<h1 class="page-title title-font">Style Guide</h1>

<?php include('modules/fonts-style-guide.php');?>
<?php include('modules/type-patterns-style-guide.php'); ?>
<?php include('modules/colors-style-guide.php'); ?>

<?php foreach($sections as $section) { ?>
	<section id="<?=$section['slug']?>" class="<?=$section['slug']?>">
		<inner-column>
			<?php if($_GET['page'] == 'style-guide') { ?>
			<h2 class="section-heading-font"><?=$section['title']?></h2>
			<hr>
			<?php } ?>
			<?php include('modules/' . $section['module'] . '.php'); ?>	
		</inner-column>
		<space></space>
	</section>
<?php } ?>	





	<section class="bridge-post-zone">
		<inner-column>
			<h2 class="section-heading-font">Bridge Post</h2>
			<hr>
			<?php
				$images = ["images/default.jpeg","images/svgs/lion.svg"];
				$baseContent = "This is some paragraph text that describes and contextualizes the content next and succeeding it. This module will usually be used at the beginning of case studies, and will be used to give an overview of the project.";
				$horizontalImages = false;
			 ?>
			<?php include('modules/bridge-post.php'); ?>
		</inner-column>
	</section>

