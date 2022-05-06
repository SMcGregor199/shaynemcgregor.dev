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
			<a class="link-font" href="?page=style-guide&type=<?=$section['title']?>">Detail Link</a>
			<h2 class="section-heading-font"><?=$section['title']?></h2>
			<hr>
			<?php } ?>
			<?php include('modules/' . $section['module'] . '.php'); ?>	
		</inner-column>
		<space></space>
	</section>
<?php } ?>	





