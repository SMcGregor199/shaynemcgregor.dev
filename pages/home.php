
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
		<?php include("modules/blog-card.php") ?>
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
			$image = "images/lion-cub-thumb.png";
			$title = "Lion-Cub Books";
			$content = "This site is organized around the fundamentals of CRUD (create, read, update, delete). In this fictional book store site, user's can add, update, and delete books from the site's json database. All changes are reflected book-cards that appear throughout the site";
			$link = "?page=case-study&projectID=0";
			$linkText = "Case Study";
		?>
		<?php 
			$project1 = [
				"title" => "Lion-Cub Books",
				"image" => "images/lion-cub-thumb.png",
				"content" => "This site is organized around the fundamentals of CRUD (create, read, update, delete). In this fictional book store site, user's can add, update, and delete books from the site's json database. All changes are reflected book-cards that appear throughout the site",
				"link" => "?page=case-study&projectID=0",
				"linkText" => "Case Study",
			];

			$projects = [$project1];

			$projectsJson = json_encode($project1);
			file_put_contents("data/projects.json", $projectsJson);
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

			$phpGarden = [
				"title" => "PHP Garden",
				"content" => "PHP is a server-size scripting language that's important for stitching files together and creating forms that receive user input. Click below to see the cool forms I've been creating with PHP.",
				"link" => "?page=php-exercises",
				"linkText" => "Click Here",
				];
			$layoutGarden = [
				"title" => "Layout Garden",
				"content" => "Positioning elements on a webpage is a critical part of making webpages readable. Click below to check out my cool responsive layout skills",
				"link" => "../responsive-layout-garden",
				"linkText" => "Click Here",
			];

			$gardens = [$phpGarden, $layoutGarden];

			$gardensJson = json_encode($gardens);
			file_put_contents('data/gardens.json', $gardensJson);
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


