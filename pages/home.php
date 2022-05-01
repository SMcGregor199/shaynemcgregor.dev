<?php $homePageJson = file_get_contents('data/home.json');
		$homePage = json_decode($homePageJson, true);
		$sections = $homePage['sections'];
 ?>

<?php foreach($sections as $section) { ?>
<section id="<?=$section['slug']?>" class="<?=$section['slug']?>">
	<inner-column>
		<?php include('modules/' . $section['module']); ?>

		<?php if($section['slug'] == 'writing'){ ?>
			<?php 
				$blogsJson = file_get_contents('data/blogs.json');
				$blogs = json_decode($blogsJson, true);
			 ?>
			<?php include("modules/blog-gallery.php"); ?>
		<?php	} ?>

		<?php if($section['slug'] == 'projects'){ ?>
			<?php 
				$projectsJson = file_get_contents("data/projects.json");
				$projects = json_decode($projectsJson, true);
			 ?>
			<?php include("modules/project-gallery.php"); ?>
		<?php	} ?>

		<?php if($section['slug'] == 'gardens'){ ?>
			<?php 
				$gardensJson = file_get_contents("data/gardens.json");
				$gardens = json_decode($gardensJson, true);
			 ?>
			<?php include("modules/gardens-gallery.php"); ?>
		<?php	} ?>		
	</inner-column>
	<space></space>
</section>
<?php } ?>




