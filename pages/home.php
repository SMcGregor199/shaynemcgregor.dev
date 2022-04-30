<?php $homePageJson = file_get_contents('data/home.json');
		$homePage = json_decode($homePageJson, true);
		$sections = $homePage['sections'];
 ?>

<?php foreach($sections as $section) { ?>
<section id="<?=$section['slug']?>" class="<?=$section['slug']?>">
	<inner-column>
		<?php include($section['module']); ?>

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
	</inner-column>
	<space></space>
</section>
<?php } ?>






<section id="gardens" class="gardens">
	<inner-column>
		<?php 
			$title = "Programming Gardens";
			$content = "They’re not projects in the sense that they have a definitive end goal. These “gardens,” like their real life counterparts, are places that I manage, curate, and exercise my programming skills. At the moment, I have two gardens. One shows off the work I’ve been doing developing forms with PHP while the other shows off my work with the flexible layout module. More gardens are soon to come. ";
		?>

		<?php include("modules/section-heading.php"); ?>

		<?php
			$gardensJson = file_get_contents("data/gardens.json");
			$gardens = json_decode($gardensJson, true);
		?>

		<?php	include("modules/garden-gallery.php"); ?>	 
	</inner-column>
	<space></space>
</section>

<section id="playlist" class="playlist">
	<inner-column>
		<?php 
			$title = "Playlist";
			$contents = ["This is a collection of tracks I've been listening to. It's a dope list of tracks if you're into a mix of lofi, drill, phonk remixes, and '90s era beats. I'm still wrapping my head around how the internet has changed rap music. If you have any thoughts on this topic, comment on my Substack."];
			$link = "https://shaynemcgregor.substack.com/p/what-rap-have-i-been-listening-to?s=w";
			$linkText = "Gritty Internet Hip-Hop Vibes";
		?>
		<?php include("modules/article.php"); ?>
	</inner-column>
	<space></space>
</section>


