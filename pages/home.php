
<section id="about" class="about">
	<inner-column>
		<?php 
		$title = "My Story";
		$contents = ["I am a web designer and  hold a Ph.D. in African American Studies and English from Yale University. Thinking about web design through the lens of race and literature, allows me to pursue questions related to user accessibility and legibility.","I want to find a company where I can continue to expand my skillset as a developer and designer. Because writing is such a big part of who I am, I also want to write 50 blog posts by the end of the year. Click below to learn more about my specific goals and stay up-to-date on my progress."];
		$link = "?page=goals";
		$linkText = "Goals";
		?>
		<?php include("modules/article.php");?>
	</inner-column>
	<space></space>
</section>

<section id="writing" class="writing">
	<inner-column>
		<?php 
			$title = "Writing";
			$content = "I mostly write on Substack. But you can find me on Codenewbie where I typically respost my writing. Here are some of the pieces I'm particularly proud of, and speak to what I've been learning about web development as well as my recent thinking on rap music.";
		?>
		<?php include("modules/section-heading.php"); ?>

		<?php $blogsJson = file_get_contents('data/blogs.json');
				$blogs = json_decode($blogsJson, true);
		 ?>
		<?php include("modules/blog-gallery.php") ?>
	</inner-column>
	<space></space>
</section>

<section id="projects" class="projects">
	<inner-column>
		<?php 
			$title = "Featured Projects & Exercises";
			$content = "Here's a list of some projects that I've been working on. You can find a full list of the stuff I've been working on in Github. These projects highlight three distinct areas of web design and development that I like to focus on.";
		?>
		<?php include("modules/section-heading.php"); ?>
		<?php 
			$projectsJson = file_get_contents("data/projects.json");
			$projects = json_decode($projectsJson, true);
		 ?>
		<?php include("modules/project-gallery.php"); ?>
	</inner-column>
	<space></space>
</section>

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


